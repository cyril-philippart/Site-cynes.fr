<?php

namespace App\Models;

abstract class CoreModel 
{
    public function save() 
    {
        if (empty($this->id) )
        {
            return $this->insert();
        }
    }

    abstract function insert();

   
}
