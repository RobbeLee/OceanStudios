<?php

require_once __DIR__.'/../models/model.php';

class ContactController {
	public function index() {
		$template_engine = get_template_engine();
		echo $template_engine->render('contact/homepage');
	}
}