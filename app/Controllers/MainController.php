<?php

namespace App\Controllers;

use App\Models\Home;

class MainController extends CoreController
{
    public function home()
    {
        $allElement = Home::findAll();
        $this->show('home', [
            'allElement' => $allElement
        ]);
    }
}