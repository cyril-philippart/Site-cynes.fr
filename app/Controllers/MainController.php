<?php

namespace App\Controllers;

use App\Models\Home;
use App\Models\Logo;

class MainController extends CoreController
{
    public function home()
    {
        $allElement = Home::findAll();
        $allLogo = Logo::findAll();
        
        $this->show('home', [
            'allElement' => $allElement,
            'allLogo' => $allLogo
        ]);
    }

    public function legal_mentions()
    {
        
        $this->show('legal_mentions');
    }
}