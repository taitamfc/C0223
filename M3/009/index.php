<?php
// Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra
require_once 'controllers/ProductController.php';
$objController = new ProductController();
$objController->index();