<?php

namespace App\Controllers;

use App\Models\Expertise;

class ExpertiseController extends CoreController
{
    public function expertise()
    {
        $allExpertise = Expertise::findAll();
        $this->show('expertise', [
            'allExpertise' => $allExpertise
        ]);
    }
}