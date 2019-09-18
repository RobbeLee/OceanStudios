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

function get_template_engine() {
	global $CONFIG;
	$templates_path  = $CONFIG['PRIVATE'] . '/views';
	$template_engine = new League\Plates\Engine( $templates_path );
	return $template_engine;
}

function base_url() {
    global $CONFIG;
    // base directory
    $public_dir = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    // server protocol
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    // domain name
    $domain = $_SERVER['SERVER_NAME'];
    // base url
    $base_url = preg_replace("!^${public_dir}!", '', $CONFIG['WEBROOT']);
    // server port
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = (($protocol === 'http' && $port === 80) || ($protocol === 'https' && $port === 443)) ? '' : ":$port";
    // put em all together to get the complete base URL
    $url = "${protocol}://${domain}:${port}/";
    return $url;
}

function url($path) {
    return base_url() . $path;
}