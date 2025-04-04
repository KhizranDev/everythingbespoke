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
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'D:/laragon/www/everythingbespoke/admin/');
defined('SITE_ROOT_WEB') ? null : define('SITE_ROOT_WEB', 'D:/laragon/www/everythingbespoke/');
defined('SITE_WEB_URL') ? null : define('SITE_WEB_URL', 'http://everythingbespoke.test:81/');
defined('EMAIL_ROOT') ? null : define('EMAIL_ROOT', 'D:/laragon/www/everythingbespoke/admin/emails/');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'include');
defined('LAYOUT_PATH') ? null : define('LAYOUT_PATH', SITE_ROOT.DS.'include');

//content directory
defined('BRAND_DIR') ? null : define('BRAND_DIR', SITE_ROOT_WEB.'content'.DS."brands".DS);
defined('ARTICLE_DIR') ? null : define('ARTICLE_DIR', SITE_ROOT_WEB.'content'.DS."articles".DS);
defined('STYLE_DIR') ? null : define('STYLE_DIR', SITE_ROOT_WEB.'content'.DS."style_guide".DS);
defined('CATALOGUE_DIR') ? null : define('CATALOGUE_DIR', SITE_ROOT_WEB.'content'.DS."catalogue".DS);

//content urls
defined('BRAND_URL') ? null : define('BRAND_URL', SITE_WEB_URL.'content/brands/');
defined('ARTICLE_URL') ? null : define('ARTICLE_URL', SITE_WEB_URL.'content/articles/');
defined('STYLE_URL') ? null : define('STYLE_URL', SITE_WEB_URL.'content/style_guide/');
defined('CATALOGUE_URL') ? null : define('CATALOGUE_URL', SITE_WEB_URL.'content/catalogue/');

// constant values
defined('ADMIN_EMAIL') ? null : define('ADMIN_EMAIL', 'noman.mateen@bailssoft.com');
defined('PROJECT_NAME') ? null : define('PROJECT_NAME', 'C R M | Everything Bespoke');

// load config file first
require_once(LIB_PATH.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

// load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');
require_once(LIB_PATH.DS.'userlogin.php');
require_once(LIB_PATH.DS.'brands.php');
require_once(LIB_PATH.DS.'fabrics.php');
require_once(LIB_PATH.DS.'articles.php');
require_once(LIB_PATH.DS.'style_type.php');
require_once(LIB_PATH.DS.'style.php');
require_once(LIB_PATH.DS.'catalogues.php');
require_once(LIB_PATH.DS.'bookings.php');

// load database-related classes


?>
