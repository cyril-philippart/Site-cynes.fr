<?php

namespace App\Controllers;

use App\Models\Picture;

class MainController extends CoreController
{
    public function home()
    {
        $allPicture = Picture::findAll();
        $this->show('home', [
            'allPicture' => $allPicture
        ]);
    }
}