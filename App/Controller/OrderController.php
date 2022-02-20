<?php

namespace App\Controller;

use App\Model\OrderModel;

class OrderController extends BaseController
{
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function getAll()
    {
        $orders = $this->model->getAll();
        include "App/View/Order/list.php";
    }

    public function getById($id)
    {
        $orders = $this->model->getById($id);
        include "App/View/Order/detail.php";
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function create($data)
    {
        $this->model->create($data);
    }

}