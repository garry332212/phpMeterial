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
  //!------Built in Math Functions--------//
    echo "<h1 style='text-align: center; color: red; font-size:3rem'>Built In Math Functions</h1><br><br>";
    
    echo "<h1>1. Math Functions</h1><br><br>";
    echo pow(2,3) ." Power of 2^3"; //* gives your power of 2^3 = 8 first value is the number and second is the power of that number

    echo "<br> <div style=' color: red; font-size:3rem'>". rand(1,10) ." Random Number</div>"; //* random number generator, generates a randome number from 1-10
    
    echo "<br>".sqrt(100) ." Square Root of 100"; //* square root of a number
    echo "<br>".ceil(20.5) ." round decimal up 20.5"; //* rounds the number up to 20.5 becomes 21
    echo "<br>".floor(20.5) ." round decimal down 20.5"; //* rounds the number down to 20.5 becomes 20
    
  //!------String Functions--------//
  echo "<h1>2. String Functions</h1><br><br>";

  //*strlen() counting how many letters in a string
  $string = "Hello";
 

  echo "<h3>$string contains "  .strlen($string).  " letters </h3>";
  


  //*strupper() changing all letters to uppercase in a string
  //*strlower() changing all letters to lowercase in a string

  $string2 = "<span style='color:red';>This is the normal string</span>";
  $uppercase = "<span style='color:blue';font-size:2rem>".strtoupper($string2)."</span>";
  echo "<h3>$string2 <---- this string is normal string <br>".$uppercase. " <---- this string is now uppercased <br>struppercase() --converts string to uppercase</h3>"; //*letter counts 
  
  //!------Array Functions--------//
  echo "<h1> <br>3 .Array Functions</h1><br><br>";
  $list = [11,22,32,14,15,64,37,88,19];
  
  echo "Array As Declared ---->"; print_r($list);

  echo "<br><br> Array After using sort() ";

  sort($list); //*sort the array from lowest to highest and change the elements accordinglly.
  print_r($list); // prints the array with element number and values.

  echo "<br><br>" . max($list) . "<br>"; //biggest number from the array
  echo min($list). "<br>"; //smallest number from the array



?>
</body>

</html>