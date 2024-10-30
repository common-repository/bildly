=== bildly ===
Contributors: luzischucan
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KF57UGUVFQJTS
Tags: image, embedding, bildly
Requires at least: 2.5
Tested up to: 3.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin lets you embed a bildly door image into your site.

== Description ==

If you have a "door" at [bildly](http://bildly.com "Your NOW page"), this plugin 
lets you embed the picture on your door into your own wordpress blog or website. 

You can insert the shortcode wherever you want the picture to appear. It will 
always be replaced by the current picture on your door.

Syntax: 

    [bildly door="<name>" width="<width>" height="<height>" style="<style>" class="<class>"]

Where:

* `<name>` is the door name. This is the only required parameter.
* `<width>` is the image width in px. Note that the maximum width of a bildly door image is 500px.
* `<height>` is the image height in px. Note that the maximum heigth of a bildly door image is 500px.
* `<style>` is the image style. The above width and height parameters are ignored if style is set. 
* `<class>` is the class for the image.

Any improvement ideas and other feedback is welcome [here](http://bildly.com/contact "a bildly door")


== Installation ==

1. Upload `bildly.php` to the `/wp-content/plugins/bildly` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place the `[bildly door="..."]` shortcode in your pages and posts

== Changelog ==

= 0.1 =
* Initial version
