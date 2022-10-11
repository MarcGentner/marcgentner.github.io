<?php

mb_internal_encoding("UTF-8");

// config file first!
require_once 'config.php';

// initialize app second !
require_once core . 'app.php';

require_once logic . 'controllers/Controller.php';
require_once logic . 'models/Model.php';
// require_once logic . 'controllers/Controller.php';
require_once lib . 'cache.php';
// get all functions 
// require_once core . 'functions.php';

// load db library
require_once 'database.php';

// get dot env file to load in env variables!
// require_once core . 'env.php';
// (new DotEnv(root . '.env'))->load();
// load dot env: "getenv('VARIABLES');"
