<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Contact extends CoreModel
{
    private $nom;
    private $prenom;
    private $societe;
    private $email;
    private $objet;
    private $message;


    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `contact` (nom, prenom, societe, email, objet, message)
            VALUES ('{$this->nom}', '{$this->prenom}', '{$this->societe}', '{$this->email}', '{$this->objet}', '{$this->message}')
        ";

        $insertedRows = $pdo->exec($sql);
        return $insertedRows;
    }
    
    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of objet
     */ 
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set the value of objet
     *
     * @return  self
     */ 
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of societe
     */ 
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set the value of societe
     *
     * @return  self
     */ 
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }
}