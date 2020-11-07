<?php

if ($_SERVER['HTTP_HOST'] == 'webtech.tech') {
    // Production
    define("DB_SERVER", "localhost");
    define("DB_USER", "charl989_doall");
    define("DB_PASS", "R6jhh^9uK/");
    define("DB_NAME", "charl989_wncbirds");
}   else {
    // Development
define("DB_SERVER", "localhost");
define("DB_USER", "alexh189_bird");
define("DB_PASS", "birds");
define("DB_NAME", "alexh189_bird");
}