<?php
    // $book = ['Van','Su','Dia'];
    $book = [
        0 => 'Văn',
        1 => 'Sư',
        2 => 'Dia'
    ];
    // $book2 = [
    //     "khong" => 'Van',
    //     "mot" => 'Su',
    //     "hai" => 'Dia'
    // ];

    // Lay noi dung cua file
    $data = file_get_contents('user.json');
    // Chuyen tu chuoi json sang mang hoac doi tuong
    $data = json_decode($data,true);

    // Tao ra mang user
    $user = [
        "name" => "NVBC",
        "age"  => 19
    ];

    var_dump( isset($user['name']) ); 
    var_dump( isset($user['weigt']) ); 

    // Dua phan tu User vao mang data
    array_push( $data, $user );

    // CHuyen mang chuoi json
    $json_data = json_encode($data);

    // Luu vao file user.json
    file_put_contents('user.json',$json_data);

    // Chuye huong
    // header("Location: user.php");

?>