<?php
class MyStack {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }
    //dua phan tu vao danh sach
    public function push($item){
        
    }

    // lay phan tu ra khoi ngan xep
    public function pop(){
        
    }

    // xem phan tu dau tien cua ngan xep
    public function peek(){
        
    }

    // kiem tra rong
    public function isEmpty(){
       
    }
    // xem danh sach co gi
    public function getStack(){
       
    }
    // kiem tra day
    public function isFull(){
        
    }
}
// KHoi tao doi tuong
$mystack = new MyStack(4);
// Them vao lan luot Huyen, Nho, Phong, Tam

// Lay ra phan tu tren cung ma ko xoa
// Lay ra phan tu tren cung va xoa di
// Xem danh sach co rong khong ?
// Xem danh sach co day khong
// Xem toan bo cac phan tu trong danh sach

// In doi tuong
echo "<pre>";
print_r($mystack);
echo "</pre>";

