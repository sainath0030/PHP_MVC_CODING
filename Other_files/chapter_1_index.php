<?php
$books=[
        [
            'name'      =>  'Chemmen',
            'auther'    =>  'Thakazhi Sivasankara Pillai',
            'releaseDate'=> 1990,
            'publishUrl'=> 'http://example.test'
        ],
        [
            'name'      =>  'Ente Uppukkakku oru ana undayirunnu',
            'auther'    =>  'Vaikom Muhammad Basheer',
            'releaseDate'=> 2000,
            'publishUrl'=> 'http://example.test'
        ],
        [
            'name'      =>  'Pathummayude Aadu',
            'auther'    =>  'Vaikom Muhammad Basheer',
            'releaseDate'=> 2011,
            'publishUrl'=> 'http://example.test'
        ]
    ];
   /*  function filter($items, $fn){
        $filteredItems =[];
        foreach($items as $item){
         if($fn($item)){
             $filteredItems[]   = $item;
         }
        }

        return  $filteredItems;
     }
  */

    $filteredBooks =  array_filter($books, function($book){
        return ($book['releaseDate'] > 1998  && $book['releaseDate'] < 2010);

    }); 

    
    require "index.view.php";

