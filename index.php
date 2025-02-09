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
         'auther' => "god",
         'release_date'=> 2001,
         'purchase_url' => "https//www.sahal.com"
      ],
      [
         'name' => "life of me",
         'auther' => "god",
         'release_date'=> 2002,
         'purchase_url' => "https//www.sahal.com"
      ],
   ]

   ?>

   <ul>
      <?php foreach ($books as $book): ?>
         <li>
            <a href="<?= $book['purchase_url'];?>">
               <?php echo $book['name'] ?> (<?php echo $book['release_date'];?>)

            </a>


         </li>
      <?php endforeach; ?>
   </ul>
</body>

</html>