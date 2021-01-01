<?php

namespace OCours\Models;

use OCours\Utils\Database;
use PDO;

class Saison
{
    private $id;
    private $number;
    private $name;
    private $subtitle;
    private $picture;

    public function find($number)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `Saison` WHERE `number` = '{$number}';";
        $statement = $pdo->query($sql);
        $saison = $statement->fetchObject(static::class);
        return $saison;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `Saison`;";
        $statement = $pdo->query($sql);
        $saisons = $statement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $saisons;
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

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
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
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

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
}