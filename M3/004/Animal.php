<?php
// Lop truu tuong
abstract class Animal {
    abstract function say();
    abstract function move();

    public function showInfo(){
        echo __METHOD__;
    }

}
abstract class Animal2 extends Animal {
    abstract public function stop();
}

/*
Khong the khoi tao DT
Co cac PT binh thuong
Lop co PTTT thi lop do phai la TT
Lop ke thua tu lop TT, trien khai lai ALL cac PTTT
Lop TT thi ko the final
PTTT thi ko the final
*/

interface Bird {
    function fly();
}

interface Fish {
    function swing();
}

/*
- Tao ra kieu du lieu moi
- ko the KTDT
- ko the co PTBT
- trien khai tat ca
- trien khai cac pt ko lien quan
- bo sung cho viec PHP ko ho tro da ke thua
*/ 

class Human extends Animal2 implements Bird,Fish {
    public function say(){

    }
    public function move(){

    }
    public function stop(){

    }
    public function fly(){

    }
    public function swing(){

    }
}

