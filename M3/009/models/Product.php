<?php
    // Ket noi voi database
    class Product {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `c10_mat_hang`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // ly chi tiet 1 du lieu
        public static function find($id){

        }

        // Them moi du lieu
        public static function store($data){

        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){

        }

        //Xoa du lieu
        public static function delete($id){

        }
    }