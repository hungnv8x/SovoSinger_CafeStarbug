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
}