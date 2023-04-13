<?php
$tusach=[
    ['van','su','dia'],
    ['toan','hoa','anh']
];

echo "<pre>";
print_r($tusach);
echo "</pre>";
//truy cap ptu
echo $tusach[0][2];

//thay doi gia tri ptu
$tusach[0][0] = 'van hoc';
$tusach[1][2] = 'tieng anh';

echo "<pre>";
print_r($tusach);
echo "</pre>";

//xoa ptu theo chi so
array_splice($tusach[1],1,1);

echo "<pre>";
print_r($tusach);
echo "</pre>";

//duyet mang

for($i = 0;$i <count($tusach);$i++){
    for($j = 0;$j<count($tusach[$i]);$j++){
        echo $tusach[$i][$j];
        echo '<br>';
    }
}
