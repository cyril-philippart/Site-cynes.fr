<?php

namespace App\Controllers;

use App\Models\Projet;

class ProjetController extends CoreController
{
    public function list()
    {
        $allprojet = Projet::findAll();
        $this->show('projet/list', [
            'allprojet' => $allprojet,
        ]);
    }
}