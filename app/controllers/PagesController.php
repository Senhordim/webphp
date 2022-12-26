<?php

namespace website\controllers;


use website\helpers\View;

class PagesController {
    public function index() {
        $view = new View('/site/pages/index.php');
        $view->name = 'Home';
        return $view->render();
    }
}