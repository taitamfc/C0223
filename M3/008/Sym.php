<?php
$string = 's * (s – a) * s – b) * (s – c) ';
$array_string = str_split($string);

$leftStack = new SplStack();
$rightStack = new SplStack();
foreach($array_string as $char){
    if($char == '('){
        $leftStack->push($char);
    }
    if($char == ')'){
        $rightStack->push($char);
    }
}

// count()
if( $leftStack->count() == $rightStack->count() ){
    echo 'OK';
}else{
    echo 'NOT OK';
}


echo '<pre>';
    print_r($leftStack);
    print_r($rightStack);
echo '</pre>';