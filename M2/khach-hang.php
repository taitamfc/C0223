<?php
    $tusach = [
        'mot' => [
            'ten' => 'Van Hoc',
            'gia' => 12000
        ],
        'hai' => [
            'ten' => 'Su Hoc',
            'gia' => 15000
        ]
    ];

    $books = [
        'khong' => 'Van',
        'mot' => 'Su',
        'hai' => 'Dia',
    ];
    foreach( $books as $key => $value ){
        //khong,mot,hai
        //Van,Su,Dia
        echo '<br>'. $key .' - '.$value;
    }
    foreach( $tusach as $key => $book ){
        // $key: 'mot'
        /*
            $book = [
                'ten' => 'Van Hoc',
                'gia' => 12000
            ]
        */

        foreach( $book as $k => $v ){
            //$k: 'ten'
            //$book: 'Van Hoc'

            //$k: 'gia'
            //$book: 12000

            echo '<br>'. $k .' - '.$v;
        }
    }

    echo $tusach['mot']['ten'];
    echo $tusach['mot']['gia'];
    echo $tusach['hai']['gia'];
    echo '<pre>';
    print_r($tusach);
    echo '</pre>';