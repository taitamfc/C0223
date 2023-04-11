<?php
    $books = ['Van','Su','Dia'];
    $books[] = 'Hoa';

    var_dump( isset($books[3]) ); 
    var_dump( isset($books[4]) ); 
    // 0 1 2 3 



    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $today = time();//1681146000
    echo date('d/m/Y H:i:s', $today);
    // var_dump($today);
    echo '<hr>';
    $string = '11/4/2023';
    $string = str_replace('/','-',$string);
    $string = strtotime($string);//1681146000

    $str = ' + 2 days';
    $ngay = strtotime($str);

    echo date('d/m/Y H:i:s', $ngay);
    
    echo '<hr>';

    


    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "images/img1.jpg"],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "images/img2.jpg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "2023/04/02",
            "address" => "Nam Định",
            "profile" => "images/img3.jpg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "2023/04/01",
            "address" => "Hà Tây",
            "profile" => "images/img4.jpg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "2023/04/11",
            "address" => "Hà Nội",
            "profile" => "images/img5.jpg"]
    ];

    $a = '';

    var_dump( empty($a) ); 
    var_dump( isset($b) ); 
    

    // Kiem tra ton tai cua chi so trong mang
    // Xem freetut phan isset va empty
    if( isset( $_REQUEST['from'] ) && isset( $_REQUEST['to'] ) ){
        $from = $_REQUEST['from'];
        $to = $_REQUEST['to'];//2023-04-11 = 2023/04/11
        $from   = strtotime($from); //1681171200
        $to     = strtotime($to); //1681171200
        var_dump( strtotime('2023/04/11') );
    
        $newCustomerList = [];
        foreach( $customerList as $k => $customer ){
            $day_of_birth = $customer['day_of_birth'];
            $day_of_birth = strtotime($day_of_birth);
    
            if( $day_of_birth >= $from  && $day_of_birth <= $to ){
                // $newCustomerList[] = $customer;
                array_push($newCustomerList,$customer);
            }
        }
        // $customerList = $newCustomerList;
    }

    




    var_dump($from);
    var_dump($to);

    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';
?>

<form method="GET" action="">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
               value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>