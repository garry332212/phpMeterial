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
      //Arrays In PHP . There are two ways to declare Arrays in Php

      $numberList = array(23,25,26,285,152,156,584,41, 'Gurvinder', 'Sran', '<h1>Hello</h1>'); //OLD WAYS but Still used and can be found in old apps
      $numberList2 = [23,25,26,285,152,156,584,41, 'Gurvinder', 'Sran', '<h1>Hello</h1>']; //new way as used in oher programming languages
      
      //print_r($numberList); // prints the detailed list of array with it's elements
      

      //----------------Associative Arrays-------------------------//
      
      $numbers = array("Guri", "Nekki", "Happy"); //let's say there are 1000+ names in this array
      // print_r($numbers);
      echo "<br> <br>";

      //so we use array association to sort it out from 1000+ name  . we will find it like in the example below
      $names = array("first_name" => $numbers[0], "last_name" => 'Sran'); //What we did here is we associate array element 0 which is "Guri" from the array to first_name and gave echo it using first_name only not the element number since we already provided that in the  //!$names = array("first_name" => $numbers[0]

      // print_r($names);

      echo $names['first_name']. " ".$names['last_name'];
  
  
  ?>
</body>

</html>