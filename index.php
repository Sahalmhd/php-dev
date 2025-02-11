<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Demo</title>
</head>

<body>

   <h1>recomented books</h1>
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
   
   ?>

   <ul>
      <?php foreach ( $filterdBooks as $book): ?>

         <li>
            <a href="<?= $book['purchase_url'];?>">
               <?php echo $book['name'] ?> (<?php echo $book['release_date'];?>)

            </a>


         </li>
      <?php endforeach; ?>
   </ul>

   <p>
   </p>
</body>

</html>