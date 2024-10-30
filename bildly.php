<?php
/*
Plugin Name: bildly
Plugin URI: http://bildly.com/about/plugin/wordpress
Description: bildly
Version: 0.1
Author: bildly.com
Author URI: http://bildly.com
*/

/*
bildly (Wordpress Plugin)
Copyright (C) 2013 bildly.com
Contact us at http://bildly.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

//tell wordpress to register the demolistposts shortcode
add_shortcode("bildly", "bildly_handler");

//[bildly]
function bildly_handler( $atts ){
  extract( shortcode_atts( array(
      'door' => '',
      'width' => '',
      'height' => '',
      'style' => '',
      'class' => '',
    ), $atts ) );
  
  $code = bildly_func ($door, $width, $height, $style, $class);
  return $code;
}

function bildly_func ($door = '', $width = '', $height = '', $style = '', $class = ''){
  if ($door <> '') {
    if ($style == '') {
      if ($width <> ''){
        $style = 'width:' . $width .'px;';
        if ($height == '') {
          $style .= 'height:auto;';
        } else {
          $style .= 'height:' . $height .'px';
        }
      } elseif ($height <> '') {
        $style = 'height:' . $height . 'px;width:auto;';
      }
    }
    return "<img style='$style'" . (($class <> '')?(" class = '$class'"):('')) . " src='http://bildly.com/$door.jpg' \>";
  } else {
    return '<p>NOTE: add at least the "door" parameter to the bildly shortcode (others are "width", "height", "style", and "class")</p>';
  }
}

