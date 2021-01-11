<?php

namespace App\Controllers;

class ErrorController extends CoreController
{
    public function error()
    {
        $this->show('layout/error');
    }
}