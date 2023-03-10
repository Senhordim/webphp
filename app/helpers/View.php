<?php

namespace website\helpers;

class View
{
    private $view;
    private $data = [];

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __get($index)
    {
        return $this->data[$index];
    }

    public function render()
    {   
        ob_start();
        require VIEWS_PATH . $this->view;
        return ob_get_clean();
    }
}