<?php
// Lay noi dung cua file
$data = file_get_contents('user.json');
// Chuyen tu chuoi json sang mang hoac doi tuong
$data = json_decode($data,true);
?>


<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
    </tr>

    <?php foreach( $data as $key => $user  ): ?>
        <tr>
            <td><?php echo $key + 1 ; ?></td>
            <td><?php echo $user['name'] ; ?></td>
            <td><?php echo $user['age'] ; ?></td>
        </tr>
    <?php endforeach; ?>    
</table>