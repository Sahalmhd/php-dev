<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Demo</title>
</head>

<body>

   <h1>recomented books</h1>
   

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