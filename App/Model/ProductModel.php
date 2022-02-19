<?php

namespace App\Model;

class ProductModel extends BaseModel
{
    public $table = "products";

    public function getAll()
    {
        $sql = "select products.id, products.name, products.price, products.image, categories.name as category
                from products join categories on category_id=categories.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);

    }

    public function getById($id)
    {
        $sql = "select products.id, products.name, products.price, products.image, categories.name as category
                from products join categories on category_id=categories.id where products.id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function showCart($ids)
    {
        $sql = "select * from $this->table where id in ($ids)";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function create($product)
    {
        $sql = "insert into $this->table(name , price, category_id, image) values (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product['name']);
        $stmt->bindParam(2, $product['price']);
        $stmt->bindParam(3, $product['category']);
        $stmt->bindParam(4, $product['image']);
        $stmt->execute();
    }

    public function update($product)
    {
        $sql = "UPDATE $this->table set name=? , price = ? , category_id = ?, image =? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product['name']);
        $stmt->bindParam(2, $product['price']);
        $stmt->bindParam(3, $product['category']);
        $stmt->bindParam(4, $product['image']);
        $stmt->bindParam(5, $product['id']);
        $stmt->execute();
    }


}