<?php

require_once __DIR__.'/../models/model.php';

class TermsController {
    public function terms() {
        $template_engine = get_template_engine();
        echo $template_engine->render('terms');
    }
}