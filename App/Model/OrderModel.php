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
    public function getAll(){
        $sql ="select orders.id, staffs.name as staff_name , customers.name as customer_name, orders.date from orders join customers  on customers.id = orders.customer_id
    join staffs  on orders.staff_id = staffs.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getId()
    {
        $sql = "select * from $this->table order by id desc limit 1";
         $stmt = $this->connect->query($sql);
         return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select s.name as s_name, c.name as c_name, p.name as p_name, oD.quantity , oD.price ,orders.date  
                from orders join orderDetail oD on orders.id = oD.order_id
                join customers c on c.id = orders.customer_id
                join staffs s on s.id = orders.staff_id
                join products p on oD.product_id = p.id
                where order_id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}