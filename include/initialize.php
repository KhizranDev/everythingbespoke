<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)

date_default_timezone_set("Asia/Karachi");

//error_reporting(0);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
//error_reporting(E_ALL);


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'D:/laragon/www/everythingbespoke/');
defined('SITE_URL') ? null : define('SITE_URL', 'http://everythingbespoke.test:81/');
defined('EMAIL_ROOT') ? null : define('EMAIL_ROOT', 'D:/laragon/www/everythingbespoke/emails/');
defined('SITE_ROOT_PANEL') ? null : define('SITE_ROOT_PANEL', 'D:/laragon/www/everythingbespoke/admin/');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'include');

//content directory
defined('BRAND_DIR') ? null : define('BRAND_DIR', SITE_ROOT.'content'.DS."brands".DS);
defined('ARTICLE_DIR') ? null : define('ARTICLE_DIR', SITE_ROOT.'content'.DS."articles".DS);
defined('STYLE_DIR') ? null : define('STYLE_DIR', SITE_ROOT.'content'.DS."style_guide".DS);
defined('CATALOGUE_DIR') ? null : define('CATALOGUE_DIR', SITE_ROOT.'content'.DS."catalogue".DS);

//content urls
defined('BRAND_URL') ? null : define('BRAND_URL', SITE_URL.'content/brands/');
defined('ARTICLE_URL') ? null : define('ARTICLE_URL', SITE_URL.'content/articles/');
defined('STYLE_URL') ? null : define('STYLE_URL', SITE_URL.'content/style_guide/');
defined('CATALOGUE_URL') ? null : define('CATALOGUE_URL', SITE_URL.'content/catalogue/');

// constant values
defined('ADMIN_EMAIL') ? null : define('ADMIN_EMAIL', 'noman.mateen@bailssoft.com');
defined('SUPPORT_EMAIL') ? null : define('SUPPORT_EMAIL', 'noman.mateen@bailssoft.com');
defined('PAGE_LIMIT') ? null : define('PAGE_LIMIT', 20);

// load config file first
require_once(LIB_PATH.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

// load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');

// load database-related classes
require_once(LIB_PATH.DS.'dropdown.php');
require_once(LIB_PATH.DS.'booking.php');
