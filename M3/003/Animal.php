<?php
class Animal {
    protected $name;
    private $color = 'Black';

    public function setName( $ts_name ){
        $this->name = $ts_name;
    }

    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }

    public function showInfo(){
        echo __METHOD__;
    }
    
}

class Cha {
    public function nha(){

    }

    public final function xe(){
        
    }
}

class Con extends Chu {

}

class Human extends Animal {
    public function setColor($ts_color){
        $this->color = $ts_color;
    }


    public function setName( $ts_name , $ts_age = 18 ){
        parent::setName('Admin');
        if($ts_age){
            $this->name = 'Human:' . $ts_name.', Age: '.$ts_age;
        }else{
            $this->name = 'Human:' . $ts_name;
        }
    }
}

// Khoi tao doi tuong
$adam = new Human();
// Goi PT setName
$adam->setName('Adam');
// Goi PT getName
echo $adam->getName();
// Goi PT getColor
// echo $adam->setColor('Red');
// echo $adam->getColor();