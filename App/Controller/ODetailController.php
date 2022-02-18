<?php

namespace App\Controller;

use App\Model\ODetailModel;

class ODetailController extends BaseController
{
    public function __construct()
    {
        $this->model= new ODetailModel();
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