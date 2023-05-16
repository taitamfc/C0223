<?php
// Lop chua du lieu
class ArrayList {
    // Thuoc tinh luu tru du lieu
    public array $elements = [];
    public $limit;
    public function __construct($limit){
        $this->litmit = $limit;
    }
    // them phan tu vao mang (danh sach)
    public function add($item){
        if( !$this->isFull() ){
            array_push($this->elements,$item);
        }
    }
    // chen phan tu vao mang dua vao vi tri
    public function addAtPos($item,$index){
        if( !$this->isFull() ){
            array_splice($this->elements,$index,0,$item);
        }
    }
    //xoa phan tu tai vi tri
    public function removeByIndex($index){
        if( isset( $this->elements[$index] ) ){
            array_splice($this->elements,$index,1);
        }
    }
    //cap nhat phan tu trong danh sach
    public function update($index,$value){
        if( isset( $this->elements[$index] ) ){
            $this->elements[$index] = $value;
        }
    }
    //tra ve do dai cua danh sach
    public function size(){
        return count($this->elements);
    }
    // kiem tra danh sach co day hay khong
    public function isFull(){
        if($this->size() == $limit){
            return true;
        }
        return false;
    }
    // kiem tra danh sach co day hay khong
    public function isEmpty(){
        if($this->size() == 0){
            return true;
        }
        return false;
    }
    // lay phan tu tai vi tri
    public function getByIndex($index){
        if( isset( $this->elements[$index] ) ){
            return $this->elements[$index];
        }
        return false;
    }
    // tim phan tu trong mang
    public function find($item){
        return array_search($item, $this->elements);
    }
}

// Khoi tao doi tuong: thiet lap danh sach gioi han (limit: 4)
// Goi phuong thuc add 3 lan ( Huyen,Phong,Nho )
// Them Tam vao vi tri 2
// Xoa Tam ra khoi danh sach
// Cap nhat Nho thanh Siu
// Xem danh sach co bao nhieu phan tu
// Kiem tra xem danh sach da day chua
// Lay phan tu tai vi tri 1
// In doi tuong ra
// echo '<pre>';
// print_r($arrayList);
// echo '</pre>';

