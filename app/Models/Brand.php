<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Brand extends CoreModel
{
    private $name;

    // Method to retrieve all brands
    public function findAll()
    {
        $sql = "SELECT * FROM brand";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $brands = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Brand::class);

        return $brands;
    }

    // Method to retrieve a brand by its ID
    public function find($id)
    {
        $sql = "SELECT * FROM brand WHERE id = ".$id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $brand = $pdoStatement->fetchObject(Brand::class);

        return $brand;
    }

    // Method to retrieve brands for the home page
    public function findAllForHomePage()
    {
        $sql = "SELECT * FROM brand WHERE show_on_home_page = 1";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $brands = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Brand::class);

        return $brands;
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