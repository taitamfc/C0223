<?php
$q = new SplQueue();
$q->enqueue('Khuong');
$q->enqueue('Phi');
$q->enqueue('Hieu');
$q->enqueue('Long');

// Đưa con trỏ về vị trí ban đầu
$q->rewind();

// echo '<br>'.$q->current();//Khuong
// $q->next();
// echo '<br>'.$q->current();//Phi

while( $q->valid() ){
    echo '<br>'.$q->current();//Khuong
    $q->next();
}