<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Product extends CoreModel
{
    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $categoryId;
    private $brandId;
    private $typeId;

    // Method to retrieve all products
    public function findAll()
    {
        $sql = "SELECT * FROM product";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    // Method to retrieve a product by its ID
    public function find($id)
    {
        $sql = "SELECT * FROM product WHERE id = ".$id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $product = $pdoStatement->fetchObject(Product::class);

        return $product;
    }

    // Method to retrieve products by brand ID
    public function findByBrand($brandId)
    {
        $sql = "SELECT * FROM product WHERE brand_id = ".$brandId;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    public function findByCategory($categoryId)
{
    $sql = "SELECT * FROM product WHERE category_id = ".$categoryId;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

    return $products;
}

public function findByType($typeId)
{
    $sql = "SELECT * FROM product WHERE type_id = ".$typeId;
    $pdo = Database::getPDO();
    $pdoStatement = $pdo->query($sql);
    $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

    return $products;
}

    // Getters and setters for the properties

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
    }

    public function getTypeId()
    {
        return $this->typeId;
    }

    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }
}