<?php
    class DongVat {
        public $name    = 'Dong Vat';
        public $age     = 18;

        // Tra ve gia tri thuoc tinh name
        public function getName(){
            return $this->name;
        }
        // Thiet lap gia tri thuoc tinh name
        public function setName($ts_name){
            $this->name = $ts_name;
        }
        // Tra ve gia tri thuoc tinh age (1)
        public function getAge(){
            return $this->age;
        }
        // Thiet lap gia tri thuoc tinh age (2)
        public function setAge($age){
            $this->age = $age;
        }
    }
    // Khởi tạo đối tượng
    $meo = new DongVat();
    // Truy xuất thuộc tính name: . -> 
    echo $meo->name;
    // Truy xuất thuộc tính age
    echo $meo->age;

    // Gọi PT setName
    $meo->setName('cho');
    // Gọi PT getname
    echo $meo->getName();

    // Gọi PT: Thiet lap gia tri thuoc tinh age (3)
    $meo->setAge(20);
    // Gọi PT: Tra ve gia tri thuoc tinh age (4)
    echo $meo->getAge();
