<?php

namespace App\Model;

class CustomerModel extends BaseModel
{
    public $table="customers";

    public function create($customer){
        $sql="insert into $this->table(name,phone_number,address) values (?,?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$customer["name"]);
        $stmt->bindParam(2,$customer["phone_number"]);
        $stmt->bindParam(3,$customer["address"]);
        $stmt->execute();
    }

    public function getId()
    {
        $sql = "select * from $this->table order by id desc limit 1";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}