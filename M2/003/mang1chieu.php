<?php
$a = ['van',"su","dia"];



// truy cap pt "su"
echo $a[1];

// xoa pt trong mang theo chi so
// xoa pt "dia"

// unset($a[1]);
array_splice($a,1,1);
// them phan tu vao mang : 'toan'

echo "<pre>";
print_r($a);
echo "</pre>";
// array_push($a,'toan');

// array_unshift($a,'tieng anh');



echo "<pre>";
for ($i=0;$i<count($a);$i++){
    echo $a[$i];
    echo "<br>";

}
echo "</pre>";

