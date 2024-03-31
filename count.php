<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="count">
    <form action="" method="POST">
    <input class="count" type="number" name="count" />

    <?php
     if(isset($_POST['count'])) {
        $i = $_POST['count'];
       
      }


      if ($i>=1 && $i <=50) {
         echo  $i ." is in first section";
      }  elseif ($i>=51 && $i <=100) {
         echo  $i ." is in second section";
      } else 
      echo $i ." unknown";
    ?>
    
</body>
</html>
   
  
    

   
   
