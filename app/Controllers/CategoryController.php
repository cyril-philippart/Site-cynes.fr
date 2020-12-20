<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends CoreController
{
    public function list()
    {
        $allCategory = Category::findAll();
        $this->show('category/category', [
            'allCategory' => $allCategory,
        ]);
    }
}