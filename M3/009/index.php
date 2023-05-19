<?php
// Ket noi voi DB
require_once 'db.php';
// Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra


$action = isset( $_GET['action'] ) ? $_GET['action'] : 'index';
$controller = isset( $_GET['controller'] ) ? $_GET['controller'] : 'product';
switch ($controller) {
    case 'product':
        require_once 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    case 'user':
        require_once 'controllers/UserController.php';
        $objController = new UserController();
        break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'show':
        $objController->update();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}