<?php
echo '<br>'.__FILE__;
?>
<a href="index.php?action=create"> Them moi </a>
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
        foreach($items as $r) :
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
            <a href="index.php?action=edit&id=<?php echo $r['MAHANG'];?>">Sua</a> |  
            <a href="index.php?action=show&id=<?php echo $r['MAHANG'];?>">Xem</a> |  
            <a onclick=" return confirm('Are you sure ?'); " href="index.php?action=destroy&id=<?php echo $r['MAHANG'];?>">Xoa</a> 
        </td>
    </tr>

    <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>