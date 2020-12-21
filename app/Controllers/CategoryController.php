<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Realisation;

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
        $category = Category::find($params['name']);
        $realisation = $category->realisations();
        $this->show('category/category', [
            'category' => $category,
            'realisation' => $realisation
        ]);
    }

    
}