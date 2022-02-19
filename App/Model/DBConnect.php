<?php
namespace App\Model;
class DBConnect
{
    public $dns;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dns="mysql:host=localhost;dbname=cafestartbug;charset=utf8";
        $this->username="root";
        $this->password="root";
    }

    public function connect(){
        try {
            return new \PDO($this->dns,$this->username,$this->password);
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }
}