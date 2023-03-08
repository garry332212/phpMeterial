<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions</title>
</head>
<?php


//*function without parameter which calls other functions
echo "<h1>Functions</h1>";
  function init(){
    ageCalculator(1994,2023);
    
    saySomething();
  }

  
  function saySomething(){
    echo "<h4>lorem ipsum, doset isur ortket jabepa desina lorem</h4>";
  }

  //*Functionn with parameters
  function ageCalculator($born, $currYear){
    $age = $currYear - $born;
    echo "<h3>You Are $age years old</h3>";
  };

  init();


  //!-----------Functions With Return Value---------------//
  echo "<h1>Function With Return Values</h1>";

  function ageCalculator2($born, $currYear){
    $age = $currYear - $born;
   return $age ;
  };
  
  $currAge = ageCalculator2(1965,2023);

  echo $currAge . "<br>";

  $currAge = ageCalculator2(20,$currAge);

  echo $currAge;

  
 //!-----------Globel Variables & Scope---------------//
    echo "<br><h1>Global variables and Scope</h1>";
  $var = "global_outsode"; //global
  
  function changeGlobal(){
    global $var; // this will make the local var galobal so we can call it outside the function
    $var = "inside Function"; //local
  }

  echo $var; //calling the global var

  changeGlobal(); //*once function's been called it will only call the local $var below it "inside Function"

  echo "<br> $var";

 //!-----------Constant-------------//
 echo "<br><h1>Constants</h1>";

 $num = 10;
 echo $num;
 
define("Name", 1000); // this is how a constant is declared in php using pre built php function called //! define("varName", value);

echo "<BR>" .Name;

//!Other way of declarin constants

const name = "Gurvinder";

echo "<br> <br> <em>other way of definign constant</em> <br>" . name;

?>

<body>

</body>

</html>