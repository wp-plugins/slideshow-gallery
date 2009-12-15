=== Slideshow Gallery ===
Contributors: Antonie Potgieter
Donate link: http://tribulant.com/
Tags: wordpress plugins, wordpress slideshow gallery, slides, slideshow, image gallery, images, gallery, featured content, content gallery, javascript, javascript slideshow, slideshow gallery
Requires at least: 2.8
Tested up to: 2.9 beta 2
Stable tag: 1.0.3

Feature content in a JavaScript powered slideshow gallery showcase on your WordPress website

== Description ==

Feature content in a JavaScript powered slideshow gallery showcase on your WordPress website.

The slideshow is flexible and all aspects can easily be configured.

Embedding or hardcoding the slideshow gallery is a breeze. To embed into a post/page, simply insert `[slideshow]` into its content with an optional `post_id` parameter to display the gallery images uploaded to that post/page. To hardcode into any PHP file of your WordPress theme, simply use `<?php if (class_exists('Gallery')) { $Gallery = new Gallery(); $Gallery -> slideshow($output = true, $post_id = null); }; ?>`.

== Installation ==

Installing the WordPress slideshow gallery plugin is very easy. Simply follow the steps below.

1. Extract the package to obtain the `slideshow-gallery` folder
1. Upload the `slideshow-gallery` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Configure the settings according to your needs through the 'Slideshow' > 'Configuration' menu
1. Add and manage your slides in the 'Slideshow' section
1. Put `[slideshow post_id=X]` into your posts/pages or `<?php if (class_exists('Gallery')) { $Gallery = new Gallery(); $Gallery -> slideshow($output = true, $post_id = null); }; ?>` into your WordPress theme

== Frequently Asked Questions ==

= Can I display/embed multiple instances of the slideshow gallery? =

Yes, you can

== Screenshots ==

1. Slideshow gallery with thumbnails at the bottom
2. Slideshow gallery with thumbnails turned OFF
3. Slideshow gallery with thumbnails at the top
4. Different styles/colors

== Changelog ==

= 1.0 =
* Initial release of the WordPress Slideshow Gallery plugin

= 1.0.3 =
* ADDED: Default, English language file in the `languages` folder.
* ADDED: Configuration setting to turn On/Off resizing of images via CSS.
* ADDED: Webkit border radius in CSS for thumbnail images.
* ADDED: `post_id` parameter for the `[slideshow]` shortcode to display images from a post/page.
* IMPROVED: Plugin doesn't utilize PHP short open tags anymore.
* COMPATIBILITY: Removed `autoLoad` (introduced in PHP 5) parameter from `class_exists` function for PHP 4 compatibility.
* IMPROVED: Directory separator constant DS from DIRECTORY_SEPARATOR.