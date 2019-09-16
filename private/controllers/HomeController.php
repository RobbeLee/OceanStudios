<?php

require_once __DIR__.'/../models/model.php';

class HomeController {
	public function index() {
		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');
	}
	
	public function portfolio() {
		$template_engine = get_template_engine();
		echo $template_engine->render('portfolio');
	}
}