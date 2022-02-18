<?php

namespace App\Controller;

use App\Model\StaffModel;

class StaffController extends BaseController
{
    public function __construct()
    {
        $this->model = new StaffModel();
    }

    public function getAll()
    {
        $staffs = $this->model->getAll();
        include "App/View/Staff/list.php";
    }

    public function getById($id)
    {
        $staff = $this->model->getById($id);
        include "App/View/Staff/detail.php";
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("location:index.php?page=staff-list");
    }
    public function create($staff)
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include "App/View/Staff/create.php";
        }
        else{
            $staff["image"] = $this->uploadImage();
            $this->model->create($staff);
            header("location:index.php?page=staff-list");
        }
    }

    public function update($request)
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $staff = $this->model->getById($request["id"]);
            include "App/View/Staff/edit.php";
        }
        else{
            $request["image"] = $this->uploadImage();
            $this->model->update($request);
            header("location:index.php?page=staff-list");
        }
    }
}