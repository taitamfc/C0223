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
        $error = $error . '<br> Lỗi xuất hiện tại file: '.$this->getFile();
        $error = $error . '<br> Lỗi xuất hiện tại dòng: '.$this->getLine();
        $error = $error . '<br> Nội dung: '.$this->getMessage();
        return $error;
    }
}

$duong = 'dep';
$thoi_tiet = 'xau';
try {
    if( $duong == 'xau' ){
        throw new CustomException("Đi vòng"); //Phi ném - Hiếu bắt
    }
    if( $thoi_tiet == 'xau' ){
        throw new Exception("Ở nhà"); //Cường ném - Long bắt
    }
    echo 'Di thang';
} 
catch (CustomException $e) { //Hiếu bắt
    echo 'Hiếu: '. $e->errorMessage();
} 
catch (Exception $e) { //Long bắt
    echo  'Long: '. $e->getMessage();
} 
finally {
    echo '<br> Finally: Ve nha';
}