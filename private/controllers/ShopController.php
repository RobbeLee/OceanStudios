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
}