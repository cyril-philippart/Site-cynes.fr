<?php

namespace App\Models;

abstract class CoreModel 
{
    protected $id;

     /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    public function save() 
    {
        if (empty($this->id) )
        {
            return $this->insert();
        }
    }

    abstract function insert();

   
}
