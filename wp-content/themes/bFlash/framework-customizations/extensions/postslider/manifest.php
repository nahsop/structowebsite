<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']         = __('Post Sliders', '{domain}');
$manifest['uri']          = 'http://outrightnepal.com.np/';
$manifest['description']  = __('A extension that allows sliders in all post, pages, and custom posts', '{domain}');
$manifest['version']      = '1.0';
$manifest['author']       = 'Pratik Raghubanshi';
$manifest['author_uri']   = 'http://outrightnepal.com.np/';

/**
 * @type bool Display on the Extensions page or it's a hidden extension
 */
$manifest['display'] = true;
/**
 * @type bool If extension can exist alone
 * false - There is no sense for it to exist alone, it exists only when is required by some other extension.
 * true  - Can exist alone without bothering about other extensions.
 */
$manifest['standalone'] = true;
/**
 * @type string Thumbnail used on the Extensions page
 * All framework extensions has thumbnails set in the available extensions list
 * but if your extension is not in that list and id located in the theme, you can set the thumbnail via this parameter
 */
$manifest['thumbnail'] = null;