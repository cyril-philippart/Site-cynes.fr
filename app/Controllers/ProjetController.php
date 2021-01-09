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

    public function projet($params)
    {
        $projet = Projet::find($params['id']);
        $realisation = $projet->realisations();
        $this->show('projet/projet', [
            'projet' => $projet,
            'realisation' => $realisation,
        ]);
        
    }
}