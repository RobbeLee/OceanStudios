<?php

require '../private/includes/AltoRouter.php';


/**
 * Verder willen we nog wat andere zaken instellen en goed zetten
 * Dit staat in het bestand private/includes/init.php
 */
$CONFIG = require '../private/includes/config.php';
require '../private/includes/init.php';
$router = new AltoRouter();

$router->setBasePath('/OceanStudios/public');
/**
 * Hier stellen we de juiste "routes" in voor onze website
 * We vertellen de router welke url naar welk stukje code (de controller) moet worden doorgestuuurd.
 */


// User pages
$router->map('GET', '/', 'HomeController#index', 'Home page');
$router->map('GET', '/portfolio', 'HomeController#portfolio', 'Portfolio page');
$router->map('GET', '/contact', 'ContactController#index', 'Contact page');

// Web shop
$router->map('GET', '/shop', 'ShopController#index', 'Webshop Index');
$router->map('GET', '/shop/cart', 'ShopController#cart', 'Webshop Cart');
$router->map('GET', '/shop/item/[i:id]', 'ShopController#item', 'Webshop Item');

// Web shop API
$router->map('GET', '/shop/api/getItems', 'ShopController#getItems', 'Get all items');
$router->map('GET', '/shop/api/addItem?[i:id]&[i:amount]&[a:size]', 'ShopController#addItem', 'Add item to cart');
$router->map('GET', '/shop/api/removeItem?[i:id]', 'ShopController#removeItem', 'Remove item');
$router->map('GET', '/shop/api/clearCart', 'ShopController#clearCart', 'Clear cart');

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
    require '404.html';
}
