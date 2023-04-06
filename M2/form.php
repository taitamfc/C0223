<?php

    

    //Kiem tra nguoi dung da gui du lieu len
    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        echo '<pre>';
        print_r( $_REQUEST );
        echo '</pre>';
    }

?>
<form action="" method="post">
    username: <input type="text" name="username"> <br>
    email: <input type="email" name="email"> <br>
    password: <input type="password" name="password"> <br>
    <input type="submit" value="Gui">
</form>