<?php
    class VongDoi {
        public $name;
        public function __construct(){
            $this->name = '123';
            echo '<br>'.__METHOD__;
        }

       

        public function methods(){
            echo $this->name;
            echo '<br>'.__METHOD__;
        }




        public function __destruct(){
            echo '<br>'.__METHOD__;
            $this->name = '';
        }
    }

    $vongdoi = new VongDoi();
    $vongdoi->methods();
    unset($vongdoi);




    

