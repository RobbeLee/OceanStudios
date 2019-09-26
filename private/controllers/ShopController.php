<?php

require_once __DIR__.'/../models/model.php';

class ShopController {
	public function index() {
		$Cart = new Cart();
		$items = getAllProducts();
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/homepage', ['Cart' => $Cart, 'products' => $items]);
	}
	
	public function cart() {
		$Cart = new Cart();
		$ids = $_SESSION['cart'];
		$all_items = getAllProducts();
		$products = [];
		$price = 0.00;
		/**
		 * [
		 * 	id
		 * 	title
		 *  image_irl
		 *  amount
		 *  size
		 *  type
		 * ]
		 */
		for($o = 0; $o < count($ids); $o++) {
			$item = [];
			for ($i = 0; $i < count($all_items); $i++) {
				if ($all_items[$i]->code == $ids[$o]['id']) {
					if (empty($products[$i])) $products[$i] = [];
					$item = ['id' => $all_items[$i]->code,'title' => $all_items[$i]->title, 'image_url' => $all_items[$i]->image_url, 'size' => $ids[$o]['size']];
					$price += $all_items[$i]->price;
					array_push($products[$i], $item);
				}
			}
		}
		$price = number_format($price, 2);
		$price = str_replace(".", ",", $price);
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/cart', ['products' => $products, 'price' => $price]);
    }

    public function item() {
		$template_engine = get_template_engine();
		echo $template_engine->render('shop/item');
	}

	public function getItems() {
		$Cart = new Cart();
		echo $Cart->getItems();
	}

	public function addItem($itemID, $amount, $size) {
		$Cart = new Cart();
		$state = $Cart->addItem($itemID, $amount, $size);

		switch ($state) {
			case 1:
				header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
				echo "Did not add item. 400 bad request.";
				break;
			case 2:
				header($_SERVER["SERVER_PROTOCOL"]." 404 Item Not Found");
				echo "Item does not exist.";
				break;
			case 3:
				header($_SERVER["SERVER_PROTOCOL"]." 304 Item Is Out Of Stock");
				echo "Item is out of stock.";
				break;
			case 4:
				echo "Item added successfully";
				break;
			
			default:
				header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
				echo "Iets ging heel erg mis...";
				return;
				break;
		}
	}

	public function removeItem($itemID) {
		echo $itemID;
		$Cart = new Cart();
		$state = $Cart->removeItem($itemID);

		switch ($state) {
			case 1:
				header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
				echo "Did not remove item. error 400 bad request.";
				break;
			case 2:
				header($_SERVER["SERVER_PROTOCOL"]." 404 Item Not Found");
				echo "Item not in shopping cart.";
				break;
			case 3:
				echo "Item removed.";
				break;
			default:
				header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
				echo "Iets ging heel erg mis...";
				return;
				break;
		}
	}
}