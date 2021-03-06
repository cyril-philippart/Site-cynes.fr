<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Projet extends CoreModel 
{
    private $id;
    private $name;
    private $picture;

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `projet` ORDER BY `id` DESC';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $results;
    }

    static public function find($id) 
    {
        $pdo = Database::getPDO();
        $sql = "
        SELECT *
        FROM projet
        WHERE id = $id
        ;
      ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject('App\Models\Projet');
        return $results;
    }

    public function realisations()
    {
        $sql = "SELECT * FROM realisation WHERE projet_id = $this->id";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Realisation');
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