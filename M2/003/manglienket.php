<?php
//khai bao mang lien ket
$thongtin = [
    'phi' => 24,
    'long' => 34,
    'hieu' => 44,
    'khuong' => 54,
    'cuong' => 64
];

//truy cap ptu

echo $thongtin['hieu'];
echo "<pre>";
print_r($thongtin);
echo "</pre>";

//thay doi gia tri ptu
$thongtin['phi'] = 15;
echo "<pre>";
print_r($thongtin);
echo "</pre>";

//xoa ptu theo chi so

unset($thongtin['khuong']);
echo "<pre>";
print_r($thongtin);
echo "</pre>";

//duyeet mang

foreach($thongtin as $key => $value){
    echo $value;
    echo '<br>';
}
//theem ptu vao mang
$thongtin['tam'] = 23;

echo "<pre>";
print_r($thongtin);
echo "</pre>";



