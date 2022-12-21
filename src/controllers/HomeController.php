<?php

namespace website\controllers;

use website\View\View;

class HomeController {
    public function index() {
        $view = new View('/home/index.php');
        return $view->render();
    }
}