<?php

namespace App\Controller;

use App\Model\ProductModel;

class CartController
{
    public $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showCart()
    {
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $_SESSION["cart"][$_REQUEST["id"]] = 1;
            $ids = implode(",",array_keys($_SESSION["cart"]));
            $products = $this->productModel->showCart($ids);
            include_once "App/View/Order/cart.php";
        }
    }

    public function deleteCart()
    {
        if ($_GET["page"]=="cart-delete"&&$_GET["id"]){
            unset($_SESSION["cart"][$_GET["id"]]);
            if (!empty($_SESSION["cart"])){
                $ids = implode(",",array_keys($_SESSION["cart"]));
                $products = $this->productModel->showCart($ids);
            }else{
                $products = [];
            }
            include_once "App/View/Order/cart.php";
        }
    }
}