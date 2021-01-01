<?php

namespace OCours\Models;

use OCours\Utils\Database;
use PDO;

class Episode
{
    private $id;
    private $number;
    private $name;
    private $subtitle;
    private $content;
    private $id_saison;

    public function find($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `Episode` WHERE id={$id};";
        $statement = $pdo->query($sql);
        $episode = $statement->fetchObject(static::class);
        return $episode;
    }

    public function findAllInSeason($id)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `Episode` WHERE `id_saison` = {$id};";
        $statement = $pdo->query($sql);
        $episodes = $statement->fetchAll(PDO::FETCH_CLASS, static::class);
        return $episodes;
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
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of id_saison
     */ 
    public function getIdSaison()
    {
        return $this->id_saison;
    }

    /**
     * Set the value of id_saison
     *
     * @return  self
     */ 
    public function setIdSaison($id_saison)
    {
        $this->id_saison = $id_saison;

        return $this;
    }
}