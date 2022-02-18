<?php

namespace App\Controller;

abstract class BaseController
{
    public $model;

    public abstract function getAll();

    public abstract function getById($id);

    public abstract function delete($id);

    public function uploadImage($name = "bacxiu.jpg")
    {
        $target_dir = "Upload/";
        $target_file = $target_dir .time(). basename($_FILES["fileToUpload"]["name"]);
        $default = $target_dir.$name;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return $default;
        }
    }
}