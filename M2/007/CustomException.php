<?php
class CustomException extends Exception
{
    //Khai bao phuong thuc errorMessage
    public function errorMessage()
    {   
        /*
        getLine: dòng bị lỗi
        getFile: file bị lỗi
        getMessage: nội dung
        */

        $error = '';
        $error .= '<br> Lỗi xuất hiện tại file: '.$this->getFile();
        $error .= '<br> Lỗi xuất hiện tại dòng: '.$this->getLine();
        $error .= '<br> Nội dung: '.$this->getMessage();
        return $error;
    }
}

$duong = 'xau';
try {
    if( $duong == 'xau' ){
        throw new CustomException("Di vong");
    }
    echo 'Di thang';
} catch (CustomException $e) {
    echo $e->errorMessage();
} finally {
    echo 'Ve nha';
}