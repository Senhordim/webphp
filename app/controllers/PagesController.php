<?php

namespace website\controllers;


use website\helpers\View;

class PagesController {
    public function index() {
        $view = new View('/site/pages/index.php');
        return $view->render();
    }
    public function about() {
        $view = new View('/site/pages/about.php');
        return $view->render();
    }
}