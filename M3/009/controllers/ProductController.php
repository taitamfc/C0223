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
        require_once 'views/products/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Product::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Product::find($id);
        // Truyen xuong view
        require_once 'views/products/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Product::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Product::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?action=index");
    }
    // Xem chi tiet
    public function show(){

    }
}