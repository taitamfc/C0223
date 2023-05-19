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

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data){
            global $conn;
            $TENHANG = $data['TENHANG'];
            $MACONGTY = $data['MACONGTY'];
            $MALOAIHANG = $data['MALOAIHANG'];
            $GIAHANG = $data['GIAHANG'];

            $sql = "INSERT INTO `c10_mat_hang` 
            ( `TENHANG`, `MACONGTY`, `MALOAIHANG`, `GIAHANG`) 
            VALUES 
            ('$TENHANG','$MACONGTY','$MALOAIHANG','$GIAHANG')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $TENHANG = $data['TENHANG'];
            $MACONGTY = $data['MACONGTY'];
            $MALOAIHANG = $data['MALOAIHANG'];
            $GIAHANG = $data['GIAHANG'];

            $sql = "UPDATE `c10_mat_hang` SET `TENHANG` = '$TENHANG', `GIAHANG` = $GIAHANG, `MACONGTY` = '$MACONGTY' WHERE `MAHANG` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM c10_mat_hang WHERE MAHANG = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }