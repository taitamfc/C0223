<form action="index.php?action=update&id=<?= $row['MAHANG'];?>" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $row['TENHANG'];?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $row['MACONGTY'];?>"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?= $row['MALOAIHANG'];?>"> <br>
    GIAHANG: <input type="text" name="GIAHANG" value="<?= $row['GIAHANG'];?>"> <br>
    <input type="submit" value="Cap nhat">
</form>