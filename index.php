<?php
session_start();
use App\Controller\AuthController;
use App\Controller\CartController;
use App\Controller\CategoryController;
use App\Controller\ProductController;
use App\Controller\StaffController;

require "vendor/autoload.php";

$categoryController = new CategoryController();
$productController = new ProductController();
$staffController = new StaffController();
$authController= new AuthController();
$cartController = new CartController();
$page = $_GET['page'] ?? "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php
    switch ($page) {
        case "category-list":
            $categoryController->getAll();
            break;
        case "category-detail":
            $categoryController->getById($_REQUEST['id']);
            break;
        case "category-delete":
            $categoryController->delete($_REQUEST['id']);
            break;
        case "category-create":
            $categoryController->createCategory($_REQUEST);
            break;
        case "category-edit":
            $categoryController->update($_REQUEST);
            break;

            // Product
        case "product-list":
            $productController->getAll();
            break;
        case "product-create":
            $productController->create($_REQUEST);
            break;
        case "product-delete":
            $productController->delete($_REQUEST['id']);
            break;
        case "product-detail":
            $productController->getById($_REQUEST['id']);
            break;
        case "product-edit":
            $productController->update($_REQUEST);
            break;

            //staff

        case "staff-list":
            $staffController->getAll();
            break;
        case "staff-delete":
            $staffController->delete($_REQUEST['id']);
            break;
        case "staff-detail":
            $staffController->getById($_REQUEST['id']);
            break;
        case "staff-create":
            $staffController->create($_REQUEST);
            break;
        case "staff-edit":
            $staffController->update($_REQUEST);
            break;

            //login
        case "login":
            if ($_SERVER["REQUEST_METHOD"]=="GET"){
                $authController->showFormLogin();
            }else{
                $authController->login($_REQUEST);
            }
            break;
        case "logout":
            $authController->logout();
            break;
        case "cart-add":
            $cartController->showCart();
            break;
        case "cart-delete":
            $cartController->deleteCart();
            break;
        default;
            $productController->showProduct();
    }
    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
