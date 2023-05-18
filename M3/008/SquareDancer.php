<?php
class Dancer{
    public $name;
    public $gender;

    public function __construct($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}

$qNam = new SplQueue();
$qNam->enqueue( new Dancer('Khuong','male') );
$qNam->enqueue( new Dancer('Phi','male') );
$qNam->enqueue( new Dancer('Hieu','male') );
$qNam->enqueue( new Dancer('Long','male') );

$qNu = new SplQueue();
$qNu->enqueue( new Dancer('Thao','female') );
$qNu->enqueue( new Dancer('Tham','female') );
$qNu->enqueue( new Dancer('Ngoc Anh','female') );

$qNam->rewind();
$qNu->rewind();

$pairs = [];
$namWaits = [];
$nuWaits = [];
while( $qNam->valid() || $qNu->valid() ){
    if( $qNam->valid() && $qNu->valid() ){
        $pairs[] = [
            'nam' => $qNam->current(),
            'nu' => $qNu->current(),
        ];
        $qNam->next();
        $qNu->next();
    }elseif( $qNam->valid() && !$qNu->valid() ){
        $namWaits[] = $qNam->current();
        $qNam->next();
    }
    elseif( !$qNam->valid() && $qNu->valid() ){
        $nuWaits[] = $qNu->current();
        $qNu->next();
    }
}

echo '<pre>';
    print_r($pairs);
    print_r($namWaits);
    print_r($nuWaits);
echo '</pre>';