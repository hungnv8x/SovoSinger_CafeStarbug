<?php

namespace App\Model;

interface InterfaceModel
{
    public function getAll();
    public function getById($id);
    public function delete($id);
}