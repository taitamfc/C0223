<?php
// Khai bao lop Node
class Node{
    public $data;
    public $score;
    public $next;

    public function __construct($data,$score = 0){
        $this->data = $data;
        $this->score = $score;
        $this->next = NULL;
    }



}
// Khai bao lop LinkedList
class LinkedList{
    public $firstNode;
    public function __construct(){
        $this->firstNode = null;
    }
    public function addFirst($item,$score = 0){
        $node = new Node($item,$score);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
    }
    public function addLast($item,$score = 0){
        $node = new Node($item,$score);
        if( $this->firstNode == null ){
             /*
            Node Object
            (
                [data] => Khuong
                [next] => 
            )
            */
            $this->firstNode = $node;
        }else{
            $currentNode = $this->firstNode;//Khuong
            while( $currentNode->next !== null ){
                $currentNode = $currentNode->next;//Hieu
            }
            $currentNode->next = $node;//Phi
             /*
            Node Object
            (
                [data] => Khuong
                [next] => Node Object
                        (
                            [data] => Hieu
                            [next] =>  Node Object
                                    (
                                        [data] => Phi
                                        [next] => 
                                    )
                        )
            )
            */
            
        }
    }

    public function showList(){
        $current = $this->firstNode;
        while ($current != null) {
            echo $current->data.'-'.$current->score.'<br>';
            $current = $current->next;
        }
    }
    public function totalStudentsFail(){
        $current = $this->firstNode;
        $count = 0;
        while ($current != null) {
            if( $current->score < 3 ){
                $count++;
            }
            $current = $current->next;
        }
        return $count;
    }
    public function listStudentMaxScore(){
        $current = $this->firstNode;
        $students = [];
        while ($current != null) {
            if( $current->score >= 3 ){
                $students[] = $current;
            }
            $current = $current->next;
        }
        return $students;
    }

    public function findByName($name){
        $current = $this->firstNode;
        while ($current != null) {
            if( $current->data == $name ){
                return $current;
            }
            $current = $current->next;
        }
        return false;
    }
}

$objLinkedList = new LinkedList();
$objLinkedList->addLast('Khuong',1);
$objLinkedList->addLast('Hieu',2);
$objLinkedList->addLast('Phi',4);
$objLinkedList->addLast('Long',3);
$objLinkedList->addFirst('Tam',5);

echo '<pre>';
$objLinkedList->showList();
print_r($objLinkedList);
die();

