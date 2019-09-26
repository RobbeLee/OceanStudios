<?php
	require_once __DIR__.'/../includes/functions.php';
	require_once __DIR__.'/Cart.php';

function getAllProducts() {
	$rawData = file_get_contents(__DIR__ . '/../data/items.json');
	$items = json_decode($rawData);
	return $items;
}