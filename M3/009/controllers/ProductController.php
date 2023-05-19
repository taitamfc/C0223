<?php
require_once 'models/Product.php';
class ProductController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Product::all();

        // Truyen data xuong view
        require_once 'views/products/index.php';
       
    }
    // Hien thi form them moi
    public function create(){

    }
    // Xu ly them moi
    public function store(){

    }
    // Hien thi form chinh sua
    public function edit(){

    }
    // Xu ly chinh sua
    public function update(){

    }

    // Xoa
    public function destroy(){

    }
    // Xem chi tiet
    public function show(){

    }
}