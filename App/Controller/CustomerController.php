<?php

namespace App\Controller;

use App\Model\CustomerModel;

class CustomerController extends BaseController
{
public function __construct()
{
    $this->model= new CustomerModel();
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
    public function create($customer){
     $this->model->create($customer);
    }
}