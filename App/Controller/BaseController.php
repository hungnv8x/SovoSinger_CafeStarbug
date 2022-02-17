<?php

namespace App\Controller;

abstract class BaseController
{
 public $model;

 public abstract function getAll();
 public abstract function getById($id);
 public abstract function delete();
}