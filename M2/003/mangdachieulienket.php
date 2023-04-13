<?php
$tusach = [
    [
        'mot' => 'van',
        'hai' => 'su',
        'ba' => 'dia'
    ],
    [
        'mot' => 'toan',
        'hai' => 'ly',
        'ba' => 'hoa'
    ]
];
echo "<pre>";
print_r($tusach);
echo "</pre>";

//duyet mang

foreach($tusach as $key => $sach){
    foreach($sach as $key2 => $value){
        echo $value;
        echo '<br>';
    }
}