<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Type extends CoreModel
{
    private $name;

    // Method to retrieve all types
    public function findAll()
    {
        $sql = "SELECT * FROM type";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

        return $types;
    }

    // Method to retrieve a type by its ID
    public function find($id)
    {
        $sql = "SELECT * FROM type WHERE id = ".$id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $type = $pdoStatement->fetchObject(Type::class);

        return $type;
    }

    // Method to retrieve types for the home page
    public function findAllForHomePage()
    {
        $sql = "SELECT * FROM type WHERE show_on_home_page = 1";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

        return $types;
    }

    // Getter and setter for the name property

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}