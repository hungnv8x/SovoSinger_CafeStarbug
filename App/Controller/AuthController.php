<?php

namespace App\Controller;

use App\Model\StaffModel;

class AuthController
{
    public $staffModle;

    public function __construct()
    {
        $this->staffModle= new StaffModel();
    }
    public function login($request){
        if ($this->staffModle->checkLogin($request["email"],$request["password"])){
            $_SESSION['staff']=$this->staffModle->getByEmail($request["email"]);
print_r($_SESSION["staff"]);
die();
            header("location:index.php");
        }else{
            header("location:index.php?page=login");
        }
    }
    public function showFormLogin(){
        if (isset($_SESSION['staff'])){
            header("location:index.php");
        }

           include "App/View/Auth/login.php";

    }
    public function logout(){
        unset($_SESSION['staff']);
        header("location:index.php?page=login");
    }
}

