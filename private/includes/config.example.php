<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'oceanstudios',
    'DB_USER' => 'root',
    'DB_PASSWORD' => 'root',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(__DIR__),
    'BASE_RULE' => dirname(__DIR__) . '/public/'
];

return $config;