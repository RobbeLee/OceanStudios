<?php

function dbConnect($config) {
    try {
        $dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];

        $connection = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);

        return $connection;
    } catch (\PDOException $e) {
        echo 'Database is loesoe: ' . $e->getMessage();
    }
}

function url( $path ) {
	global $CONFIG;
	return $CONFIG['BASE_URL'] . $path;
}

function get_template_engine() {
	global $CONFIG;
	$templates_path  = $CONFIG['PRIVATE'] . '/views';
	$template_engine = new League\Plates\Engine( $templates_path );
	return $template_engine;
}