<?php

namespace App\Controllers;

class CoreController 
{
    protected function show(string $viewName, $viewVars = []) 
    {
        global $router;
        $viewVars['currentPage'] = $viewName; 
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewVars);

        require_once __DIR__.'/../Views/layout/header.tpl.php';
        require_once __DIR__.'/../Views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../Views/layout/footer.tpl.php';
    }

}