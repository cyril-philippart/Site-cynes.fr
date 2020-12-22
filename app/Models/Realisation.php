<?php

namespace App\Models;

use App\Models\CoreModel;
use App\Utils\Database;
use PDO;

class Realisation extends CoreModel
{
    private $id;
    private $name;	
    private $picture;
    private $category_id;
    private $projet_id;

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `realisation`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $results;
    }

    public function insert()
    {
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of projet_id
     */ 
    public function getProjet_id()
    {
        return $this->projet_id;
    }

    /**
     * Set the value of projet_id
     *
     * @return  self
     */ 
    public function setProjet_id($projet_id)
    {
        $this->projet_id = $projet_id;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}