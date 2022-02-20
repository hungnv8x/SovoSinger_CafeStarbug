<?php

namespace App\Controller;

use App\Model\CustomerModel;
use App\Model\ODetailModel;
use App\Model\OrderModel;
use App\Model\ProductModel;

class CartController
{
    public $productModel;
    public $orderModel;
    public $customerModel;
    public $oDetailModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->orderModel = new OrderModel();
        $this->customerModel = new CustomerModel();
        $this->oDetailModel = new ODetailModel();
    }

    public function showCart()
    {
//        session_destroy(); exit();

        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();

        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $_SESSION["cart"][$_REQUEST["id"]] += 1;
            $ids = implode(",", array_keys($_SESSION["cart"]));
            $products = $this->productModel->showCart($ids);

        }
        include_once "App/View/Order/cart.php";
    }

    public function deleteCart()
    {
        if ($_GET["page"] == "cart-delete" && $_GET["id"]) {
            unset($_SESSION["cart"][$_GET["id"]]);
            if (!empty($_SESSION["cart"])) {
                $ids = implode(",", array_keys($_SESSION["cart"]));
                $products = $this->productModel->showCart($ids);
            } else {
                $products = [];
            }
            include_once "App/View/Order/cart.php";
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["update"])) {
                if (empty($_SESSION["cart"])){
                    echo "Giỏ hàng chưa có sản phẩm nào";
                }else{
                    foreach ($_POST["quantity"] as $id => $item){
                        $_SESSION["cart"][$id] = $item;
                    }
                    $ids = implode(",", array_keys($_SESSION["cart"]));
                    $products = $this->productModel->showCart($ids);
                    include_once "App/View/Order/cart.php";
                }
            }else{
                if (empty($_SESSION["cart"])){
                    echo "Giỏ hàng chưa có sản phẩm nào";
                }elseif($_POST["name"]&&$_POST["phone_number"]&&$_POST["address"]){
//                    print_r($_SESSION["staff"]->id); exit();
                    $customer = [
                        "name" => $_POST["name"],
                        "phone_number" => $_POST["phone_number"],
                        "address" => $_POST["address"]
                    ];
                    $this->customerModel->create($customer);
                    $order = [
                        "staff_id" => $_SESSION["staff"]->id,
                        "customer_id" => $this->customerModel->getId()->id,
                        "date" => date("y-m-d"),
                    ];
                    $this->orderModel->create($order);
                    $ids = implode(",", array_keys($_POST["quantity"]));
                    $products = $this->productModel->showCart($ids);
                    $oderDetails = [];
                    foreach ($products as $product){
                        $orderDetail =[
                            "product_id" => $product->id,
                            "quantity" => $_SESSION["cart"][$product->id],
                            "price" => $product->price,
                            "order_id" => $this->orderModel->getId()->id
                        ];
                        $oderDetails[]=$orderDetail;
                    }
                    foreach ($oderDetails as $detail){
                        $this->oDetailModel->create($detail);
                    }
                    unset($_SESSION["cart"]);
                    header("location:index.php?page=order-list");
                }else{
                    echo "Chưa nhập thông tin khách hàng";
                }
            }
        }
    }
}