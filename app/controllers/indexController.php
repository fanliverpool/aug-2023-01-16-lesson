<?php

namespace app\controllers;

use app\core\AbstractController;

class indexController extends AbstractController
{

    public function index()
    {
        $this->view->render('index_index');
    }

    public static function url(string $controller = null, string $action = null)
    {
        $controller = $controller ?? 'index';
        $action = $action ?? 'index';
        return "/{$controller}/{$action}";
    }
}