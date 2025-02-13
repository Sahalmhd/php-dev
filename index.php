<?php




   $books = [

      [
         'name' => "life",
         'auther' => "andywier",
         'release_date'=> 2001,
         'purchase_url' => "https//www.sahal.com"
      ],
      [
         'name' => "life of me",
         'auther' => "martin",
         'release_date'=> 2002,
         'purchase_url' => "https//www.sahal.com"
      ],
      [
        'name' => "alogorthims",
        'auther' => "martin",
        'release_date'=> 2003,
        'purchase_url' => "https//www.sahal.com"
     ],
   ];

   $filter= function ($items,$fn ){

      $filtedrdItems=[];
      foreach($items as $item){
         if($fn($item)){
            $filtedrdItems[]=$item;
         }
      }
      return $filtedrdItems;
   };
      $filterdBooks=array_filter($books, function($book){
        return $book['release_date']>=2002;
      });
   
   
      require 'index.view.php';