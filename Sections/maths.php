<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Math Exercises PHP</h1>

  <?php
    $multiply = 5 * 10;
    $subtract = 100 - 45;
    $division = (3 + 5) /2 ;

    //this will print the number from the calculation abvove in the variables
    echo "<h1> $multiply+ <br> $subtract+ <br> $division+</h1>";
    echo "<h1>______</h1>";
    
    //let's Add up all the variables
    $sum  =  $multiply + $subtract + $division;
    echo " <h2>$sum </h2>";

  ?>
</body>

</html>