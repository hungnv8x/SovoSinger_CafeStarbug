<?php

namespace App\Model;

class OrderModel extends BaseModel
{
    public $table="orders";

    public function create($order){
        $sql="insert into $this->table(staff_id,customer_id,date) values (?,?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$order["staff_id"]);
        $stmt->bindParam(2,$order["customer_id"]);
        $stmt->bindParam(3,$order["date"]);
        $stmt->execute();
    }
    public function update($order){
        $sql="update $this->table set staff_id=?,customer_id=?,date=? where id=?";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$order["staff_id"]);
        $stmt->bindParam(2,$order["customer_id"]);
        $stmt->bindParam(3,$order["date"]);
        $stmt->bindParam(4,$order["id"]);
        $stmt->execute();
    }
}