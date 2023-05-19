<?php
$username   = 'root';
$password   = '123456';
$database   = 'c10';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}