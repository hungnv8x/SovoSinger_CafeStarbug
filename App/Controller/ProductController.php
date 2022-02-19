<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\Model\ProductModel;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function getAll()
    {
        $products = $this->model->getAll();
        include "App/View/Product/list.php";
    }

    public function showProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $products = $this->model->getByName($_POST["search"]);
        }else{
            $products = $this->model->getAll();
        }
        include "App/View/Layout/main.php";
    }

    public function getById($id)
    {
        $product = $this->model->getById($id);
        include "App/View/Product/detail.php";
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("location:index.php?page=product-list");
    }

    public function create($product)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryModel = new CategoryModel();
            $categories = $categoryModel->getAll();
            include "App/View/Product/create.php";
        } else {
            $product["image"] = $this->uploadImage();
            $this->model->create($product);
            header("location:index.php?page=product-list");
        }
    }

    public function update($request)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryModel = new CategoryModel();
            $categories = $categoryModel->getAll();
            $product = $this->model->getById($request["id"]);
            include "App/View/Product/edit.php";
        } else {
            $request["image"] = $this->uploadImage();
            $this->model->update($request);
            header("location:index.php?page=product-list");
        }
    }

}