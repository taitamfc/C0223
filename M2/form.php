<?php

    // $books = ['Van','Su','Dia'];
    // //          0     1    2

    // echo $books[0];

    // $books = [
    //     'khong' => 'Van',
    //     'mot' => 'Su',
    //     'hai' => 'Dia',
    // ];

    // echo $books['khong'];

    //Kiem tra nguoi dung da gui du lieu len
    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        
        echo '<pre>';
        print_r( $_REQUEST );
        echo '</pre>';

        echo '<br>'. $_REQUEST['username'];
        echo '<br>'. $_REQUEST['email'];
        echo '<br>'. $_REQUEST['password'];
    }

?>
<form action="" method="post">
    username: <input type="text" name="username"> <br>
    email: <input type="email" name="email"> <br>
    password: <input type="password" name="password"> <br>
    <input type="submit" value="Gui">
</form>