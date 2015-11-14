<?php
# 1. Place this file in the root of your site;
# 2. Make your changes;
# 3. Rename the file to config.php.
# ---------------------------------------------------------------
# page caching (true|false)
define('PAGE_DEFAULT_CACHE', false);
# HTML compress (true|false)
define('PAGE_COMPRESS_HTML', false);
# debug mode (true|false)
define('DEBUG_MODE', true);
# root path
define('MAIN_PATH', $_SERVER['DOCUMENT_ROOT']);
# ---------------------------------------------------------------
# default layout
define('PAGE_DEFAULT_TEMPLATE', '~/Layouts/_Layout.php');
# default page title
define('PAGE_DEFAULT_TITLE', 'WebForms.PHP');
# default encode
define('PAGE_DEFAULT_ENCODE', 'utf-8');
# default culture
define('PAGE_DEFAULT_CULTURE', '');
# meta tags
define('META_DESCRIPTION', 'Template engine, HTML components and the beginnings of Framework for web sites creation in PHP.');
define('META_KEYWORDS', 'WebForms, PHP, Documentation, Manual, Guide, Demo');
define('META_AUTHOR', 'Aleksey Nemiro (VVO-JOK-LED)');
define('META_ROBOTS', 'ALL');
# ---------------------------------------------------------------
?>