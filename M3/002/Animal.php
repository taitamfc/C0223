<?php
class Animal {
    protected $name = 'Animal';
    private $age = 0;
    public  $color = 'black';
    private static $msg = 'Hello';

    public function getName(){
        return $this->name;
    }

    public function setName($ts_name){
        $this->name = $ts_name;
    }

    public function showInfo(){
        echo __METHOD__;
        echo $this->name;
        echo self ::$msg;
    }

    public static function xin_chao(){
        // echo $this->color; 
        return self :: $msg;
    }
}


// Truy xuat thuoc tinh msg
// echo Animal::$msg;
// Truy xuat Pt xin_chao
echo Animal::xin_chao();
$dog = new Animal();
$dog->showInfo();