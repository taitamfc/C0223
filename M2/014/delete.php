<?php
// Ket noi CSDL
include_once 'db.php';
// Lay ID tren url xuong
$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;
// Viet cau SQL
$mysql = "DELETE FROM c10_mat_hang WHERE MAHANG = $id";
// Thuc thi SQL
$conn->exec($mysql);
//Chuyen huong ve danh sach
header("Location:list.php");
die();