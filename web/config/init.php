<?php

define("DEBUG", 1);

define("PATH", "http://localhost");
define("ADMIN", "http://localhost/admin");
define("NO_IMAGE", "uploads/no_image.png");

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');

define("CORE", ROOT . '/vendor/wfm');
define("HELPERS", ROOT . '/vendor/wfm/helpers');

define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');

define("LAYOUT", "ishop");

require_once ROOT . '/vendor/autoload.php';
