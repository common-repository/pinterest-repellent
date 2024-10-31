=== Pinterest Repellent ===
Contributors: aeryn_lynne
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EE8L3V7HRV2GA
Tags: pinterest, pinning, nopin
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extend image attributes to disable pinterest "pinning" by utilizing nopin="nopin" within html img tag.

== Description ==

Extending the image attributes to include nopin="nopin" within the &lt;img /&gt; tag.  The nopin attribute blocks the specified image from being pinned when using the "Pin It" button.

An example would look like: &lt;img src="yourimage.jpg" nopin="nopin" /&gt;

This plugin does not automatically add the nopin attribute to every image within your blog; it merely allows you to add it to your images without fear of Wordpress removing the tag when your post is published.

PLEASE NOTE: This plugin overides current image tag attributes, thus if you use any other attributes other than the ones listed below, they will be removed from your image tags automatically once this plugin is activated.

Available attributes:
<ul><li>src</li>
<li>alt</li>
<li>title</li>
<li>class</li>
<li>id</li>
<li>style</li>
<li>align</li>
<li>border</li>
<li>crossorigin</li>
<li>height</li>
<li>hspace</li>
<li>ismap</li>
<li>longdesc</li>
<li>usemap</li>
<li>vspace</li>
<li>width</li>
<li>onmouseover</li>
<li>onmouseout</li>
<li>name</li>
<li>aria-describedby</li></ul>

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `nopin.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= Will this plugin automatically add nopin to all images on my Wordpress site? =

No.  Once this plugin is activated, you will have to add nopin="nopin" within the images that you wish to not have pinned.

= Can this plugin change other attributes within my image code? =

Yes, it's possible.  If you use any other attributes other than the ones listed here, they will be removed by activating this plugin.  If you only use any of these attributes, then nothing will change.

Available attributes:
<ul><li>src</li>
<li>alt</li>
<li>title</li>
<li>class</li>
<li>id</li>
<li>style</li>
<li>align</li>
<li>border</li>
<li>crossorigin</li>
<li>height</li>
<li>hspace</li>
<li>ismap</li>
<li>longdesc</li>
<li>usemap</li>
<li>vspace</li>
<li>width</li>
<li>onmouseover</li>
<li>onmouseout</li>
<li>name</li>
<li>aria-describedby</li></ul>

If you find I've missed a common attribute, please let me know through the support tab and I will add it to the list.

== Changelog ==

= 1.0 =
* No changes made to original plugin.

== Upgrade Notice == 
= none =
 
== Screenshots ==
none