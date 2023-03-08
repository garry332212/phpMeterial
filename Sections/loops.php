<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  //*While Loop
  
  echo "<h1>While Loop</h1>";
  $counter = 1; // initialising the counter to start from 0 
  
  while ($counter <= 10) {
    $multi = $counter * 2;
    echo "$counter x 2 = $multi <br>";
    $counter++; // increment counter by 1 to run until it reaches the condition//! ($counter <= 10) in this case
  }

  //!--------------------For Loop----------------------//
  echo "<h1>For Loop</h1>";

  $var1 = 0;

  for ($var = 1; $var <= 10; $var++) {
    echo $var . " x 2 = " . $var * 2 . "<br>";
    
  }//!-----------------For Loop Ends-------------------//

   //*-------------Foreach-Loop - works with arrays---------------//
  echo "<br><h1>ForeachLoop</h1>";
   $numbers2 = array(123,243,332,412,522,6,7,8,9);
   
      foreach($numbers2 as $numAll){
        //testing the foreach number 
        echo $numAll . "<br>";
      }
  ?>
</body>

</html>