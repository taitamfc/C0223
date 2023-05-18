<?php
$q = new SplStack();
$q->push('Khuong');
$q->push('Phi');
$q->push('Hieu');
$q->push('Long');


// Đưa con trỏ về vị trí bắt đầu
$q->rewind();

while( $q->valid() ){
    echo '<br>'.$q->current();
    $q->next();
}