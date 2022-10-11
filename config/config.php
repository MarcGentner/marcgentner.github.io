<?php


// define('TITLE',  'My Portfolio' );

define('APPROOT', dirname(dirname( __FILE__)));
define('URLROOT', dirname(dirname( __FILE__)));
echo $_SERVER['DOCUMENT_ROOT'];
define('root', $_SERVER['DOCUMENT_ROOT'] . '/' );

define('adminViews', root . 'logic/views/admin/');
define('pageviews', root . 'logic/views/pages/');
define('controllers', root . 'logic/controllers/');
define('models', root . 'logic/models/');

define('lib', root . 'library/');

define('core', root . 'core/');
define('config', root . 'config/');
define('logic', root . 'logic/');

define('js', root . 'public/js/');
define('css', root . 'public/css/');


// assets 
define('assets', root . 'public/assets/');
// images
define('images', root . 'public/assets/img/');
// icons
define('icons', root . 'public/assets/icons/');


// dot env file environment variable
// define('env', root . 'core/');


// define('css', root . 'public/css');
// define('adminViews', root . '/logic/views/admin/');



/* -------------------- DB SETTINGS --------------------  */ 
// echo getenv('DB_HOST');

// if (getenv('ENV') == 'dev') {
    define("DB_HOST_DEV", getenv('DB_HOST_DEV'));
    define("DB_USER_DEV", getenv('DB_USER_DEV'));
    define("DB_PASS_DEV", getenv('DB_PASS_DEV'));
    define("DB_NAME_DEV", getenv('DB_NAME_DEV'));
// } else {
    define("DB_HOST", getenv('DB_HOST'));
    define("DB_USER", getenv('DB_USER'));
    define("DB_PASS", getenv('DB_USER'));
    define("DB_NAME", getenv('DB_NAME'));
    // define("DB_HOST", "db.marcgentner.nl");
    // define("DB_USER", "md466681db593014");
    // define("DB_PASS", "Kameleon8!123");
    // define("DB_NAME", "md466681db593014");

// }


define('PROTOCOL', 'https'); 