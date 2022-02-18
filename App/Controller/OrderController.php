<?php

namespace App\Controller;

use App\Model\OrderModel;

class OrderController extends BaseController
{
public function __construct()
{
    $this->model=new OrderModel();
}

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function create($data){
        $this->model->create($data);

    }
}