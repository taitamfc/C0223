<?php
include 'GioLinh/Tam.php';
include 'DongHa/Tam.php';

// Sử dụng
// use GioLinh\Tam;
// use DongHa\Tam as TamDongHa;

// $tam = new Tam();
$tam = new GioLinh\Tam();
echo '<pre>';
print_r($tam);

// $tam = new TamDongHa();
$tam = new DongHa\Tam();
echo '<pre>';
print_r($tam);


die();
