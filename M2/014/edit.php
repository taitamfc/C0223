<?php
include_once 'db.php';
if( isset( $_GET['id'] ) ){
    $id = $_GET['id'];
}else{
    $id = 0;
}

$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

if( !$id ){
    header("Location: list.php");
}
$sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();

if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY = $_REQUEST['MACONGTY'];
    $MALOAIHANG = $_REQUEST['MALOAIHANG'];
    $GIAHANG = $_REQUEST['GIAHANG'];

    $sql = "UPDATE `c10_mat_hang` SET `TENHANG` = '$TENHANG', `GIAHANG` = $GIAHANG, `MACONGTY` = '$MACONGTY' WHERE `MAHANG` = $id";
     //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: list.php");
}


?>
<form action="" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $row['TENHANG'];?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $row['MACONGTY'];?>"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?= $row['MALOAIHANG'];?>"> <br>
    GIAHANG: <input type="text" name="GIAHANG" value="<?= $row['GIAHANG'];?>"> <br>
    <input type="submit" value="Cap nhat">
</form>