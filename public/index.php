<?php

require '../private/includes/AltoRouter.php';


/**
 * Verder willen we nog wat andere zaken instellen en goed zetten
 * Dit staat in het bestand private/includes/init.php
 */
$CONFIG = require '../private/includes/config.php';
require '../private/includes/init.php';
$router = new AltoRouter();

$router->setBasePath('/public');
/**
 * Hier stellen we de juiste "routes" in voor onze website
 * We vertellen de router welke url naar welk stukje code (de controller) moet worden doorgestuuurd.
 */


// User pages
$router->map('GET', '/', 'HomeController#index', 'Home page');

$match = $router->match();


/**
 * Als er een "match" is dan roepen we de controller en de juiste method aan die we zelf hebben ingesteld
 * Je krijgt namelijk alle info terug in de $match variabele die je nodig hebt om de juiste code aan te roepen
 * Lees in de documentatie hoe je dit allemaal kunt doen met AltoRouter
 */
if (is_array($match) && is_callable($match['target'])) {

    //Als het een inline function is roepen we deze meteen aan
    call_user_func_array($match['target'], $match['params']);

} elseif ($match !== false) {

    //Anders hakken we de controller#method doormidden op het "#" teken en zetten we ze in twee variabelen
    list($controller_name, $method) = explode('#', $match['target']);

    try {
        // We maken een nieuwe "instance" aan van de juiste controller class
        $controller = new $controller_name;

        // We roepen we juiste method aan in de controller class
        call_user_func_array([$controller, $method], $match['params']);
        
    } catch (\Exception $e) {
        echo $e->getMessage();
        exit;
    }
} else {
    // Er is geen match dus een 404 pagina
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo '404: Onbekende pagina';
}