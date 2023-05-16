<?php
// Khai bao lop Node
class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = NULL;
    }
}
// Khai bao lop LinkedList
class LinkedList{
    public $firstNode;
    public function __construct(){
        $this->firstNode = null;
    }
    public function add($item){
        $node = new Node($item);
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
}

$objLinkedList = new LinkedList();
$objLinkedList->add('Khuong');
$objLinkedList->add('Hieu');
$objLinkedList->add('Phi');
$objLinkedList->add('Long');

echo '<pre>';
print_r($objLinkedList);
die();

