<?php

namespace App\Model;

class ODetailModel extends BaseModel
{
    public $table = "orderdetail";

    public function create($data){
        $sql="insert into $this->table(product_id,quantity,price,order_id) values (?,?,?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$data["product_id"]);
        $stmt->bindParam(2,$data["quantity"]);
        $stmt->bindParam(3,$data["price"]);
        $stmt->bindParam(4,$data["order_id"]);
        $stmt->execute();
    }
}