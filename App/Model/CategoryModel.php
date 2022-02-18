<?php

namespace App\Model;

class CategoryModel extends BaseModel
{
    public $table = "categories";

    public function create($category)
    {
        $sql = "insert into $this->table(name,description) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $category['name']);
        $stmt->bindParam(2, $category['description']);
        $stmt->execute();
    }

    public function update($category)
    {
        $sql = "update $this->table set name=?,description=? where id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $category['name']);
        $stmt->bindParam(2, $category['description']);
        $stmt->bindParam(3, $category['id']);
        $stmt->execute();
 }
}