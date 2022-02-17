<?php

namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController extends BaseController
{
    public function __construct()
    {
        $this->model = new CategoryModel();
    }

    public function getAll()
    {
        $categories = $this->model->getAll();
        include "App/View/Category/list.php";


    }

    public function getById($id)
    {
        $category = $this->model->getById($id);
        include "App/View/Category/detail.php";
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}