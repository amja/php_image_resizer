PHP Image Resizer
===========

PHP Image Resizer is a short script which resized external images via a url request system. It uses GD for the resizing. At the moment, it only supports GIF, JPEG and PNG.

Usuage
------

Make sure you have GD installed and then you're good to go. Put the script on your php server and then request it like so:

* `http://mysite.com/resizer.php` - Base URL
* `?img=` - parameter for the image URL (e.g. http://images.com/image.jpg)
* `&w=` - output width (in pixels)
* `&h=` - output height (also in pixels)