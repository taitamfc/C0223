<?php
class MyQueue {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }

    // them phan tu vao hang doi
    public function enqueue($item){
    }

    // xoas phan tu tu hang doi
    public function dequeue(){
    }

     // xem phan tu dau tien cua ngan xep
    public function peek(){

    }

    // kiem tra rong
    public function isEmpty(){
        
    }

    // kiem tra day
    public function isFull(){
        
    }
}
// KHoi tao doi tuong
$queue = new MyQueue(4);
// Them vao lan luot Huyen, Nho, Phong, Tam

// Lay ra phan tu tren cung ma ko xoa

// Lay ra phan tu tren cung va xoa di


