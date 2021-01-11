<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Projet;

class CategoryController extends CoreController
{
    public function list()
    {
        $allCategory = Category::findAll();
        $this->show('category/list', [
            'allCategory' => $allCategory,
        ]);
    }

    public function category($params)
    {
        $category = Category::find($params['id']);
        $projet = Projet::findAll();
        if ($params > 4)
        {
            $this->show('layout/error');
        }  
        else
        {
            $realisation = $category->realisations();
            $this->show('category/category', [
                'category' => $category,
                'realisation' => $realisation,
                'projet' => $projet
            ]);
        }
    }
}