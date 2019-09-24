<?php

require_once __DIR__.'/../models/model.php';

class ShopController {
	public function index() {
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/homepage');
	}
	
	public function cart() {
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/cart');
    }

    public function item() {
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/item');
	}

	public function addItem($itemID, $amount, $size) {
		$state = $Cart->addItem($itemID, $amount, $size);

		switch ($state) {
			case 1:
				header($_SERVER["SERVER_PROTOCOL"] . '400 Bad Request');
				echo "Did not add item. 400 bad request.";
				break;
			case 2:
				header($_SERVER["SERVER_PROTOCOL"] . '400 Bad Request');
				echo "Item does not exist.";
				break;
			case 3:
				header($_SERVER["SERVER_PROTOCOL"] . '400 Bad Request');
				echo "Item is out of stock.";
				break;
			case 4:
				header($_SERVER["SERVER_PROTOCOL"] . '202 Accepted');
				echo "Item added successfully";
				break;
			
			default:
				return;
				break;
		}
	}
}