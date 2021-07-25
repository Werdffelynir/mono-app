<?php

use Lib\Core\Router;

Router::get('/', function () {
    echo '[main]';
});



Router::run();
