<?php
include_once 'db.php';
$sql = "SELECT * FROM `c10_mat_hang`";

// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]

// echo '<pre>';
// print_r($rows);
// die();
?>
<a href="create.php"> Them moi </a>
<table border="1">
    <tr>
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã cong ty</th>
        <th>MA LOAI HANG</th>
        <th>SO LUONG</th>
        <th>DON VI TINH</th>
        <th>GIA HANG</th>
        <th>ACTION</th>
    </tr>

    <!-- Bắt đầu lặp -->
<?php
        foreach($rows as $r) :
            // echo '<pre>';
            // print_r($r);
            // die();
        ?>   
    <tr>
        <td><?php echo $r['MAHANG'];?> </td>
        <td><?php echo $r['TENHANG'];?> </td>
        <td><?php echo $r['MACONGTY'];?> </td>
        <td><?php echo $r['MALOAIHANG'];?> </td>
        <td><?php echo $r['SOLUONG'];?> </td>
        <td><?php echo $r['DONVITINH'];?> </td>
        <td><?php echo $r['GIAHANG'];?> </td>
        <td>
            <a href="edit.php?id=<?php echo $r['MAHANG'];?>">Sua</a> |  
            <a onclick=" return confirm('Are you sure ?'); " href="delete.php?id=<?php echo $r['MAHANG'];?>">Xoa</a> 
        </td>
    </tr>

    <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>