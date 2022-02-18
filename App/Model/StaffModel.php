<?php

namespace App\Model;

class StaffModel extends BaseModel
{
    public $table = "staffs";

    public function create($staff)
    {
        $sql = "insert into $this->table(name , email, password, address, phone_number,birthday,image,role ) values (?,?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $staff['name']);
        $stmt->bindParam(2, $staff['email']);
        $stmt->bindParam(3, $staff['password']);
        $stmt->bindParam(4, $staff['address']);
        $stmt->bindParam(5, $staff['phone_number']);
        $stmt->bindParam(6, $staff['birthday']);
        $stmt->bindParam(7, $staff['image']);
        $stmt->bindParam(8, $staff['role']);
        $stmt->execute();
    }

    public function update($staff)
    {
        $sql = "update  $this->table set name=? , email=?,password=?, address=?, phone_number=?,birthday=?,image=?,role=? where id=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $staff['name']);
        $stmt->bindParam(2, $staff['email']);
        $stmt->bindParam(3, $staff['password']);
        $stmt->bindParam(4, $staff['address']);
        $stmt->bindParam(5, $staff['phone_number']);
        $stmt->bindParam(6, $staff['birthday']);
        $stmt->bindParam(7, $staff['image']);
        $stmt->bindParam(8, $staff['role']);
        $stmt->bindParam(9, $staff['id']);
        $stmt->execute();
    }

    public function checkLogin($email, $password)
    {
        $sql = "select * from $this->table where email=? and password=?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->rowCount() >0;
    }
    public function getByEmail($email){
        $sql="select * from $this->table where email = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $email);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}