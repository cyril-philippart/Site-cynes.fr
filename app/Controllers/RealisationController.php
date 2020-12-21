<?php

namespace App\Controllers;

use App\Models\Realisation;

class RealisationController extends CoreController
{
    public function realisation()
    {
        $allrealisation = Realisation::findAll();
        $this->show('realisation', [
            'allrealisation' => $allrealisation,
        ]);
    }
}