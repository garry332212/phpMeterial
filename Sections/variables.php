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
  
  $name = "Gurvinder Singh";
  $number = 0210.515;
  $graduated = "Yes";
  
  //We can assign pictures to a variable.
  $cover1 = "<img src='https://images.unsplash.com/photo-1678094946392-0b875b3c462e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1121&q=80'/>";
   
  //We can assign HTML tags to a variable
   $heading = "<h1>My Heading</h1>";
   $paragraph = "<p>lorem ipsum paragraph and randomly typed shit here</p>";
  
  ?>

  <!-- use the dot. to diffrenciate string when using with variables -->
  <h1>
    <?php echo "Name: " .$name.  "<br>Number: ". $number.  "<br>Graduated Hai?: ".  $graduated?></h1>

  <!-- Let's display imge stored in the variable $cover -->
  <img> <?php echo $cover1 ?></img>

  <!-- Display HTML tags lik <h1> & <p> -->

  <h1><?php echo $heading ?></h1>
  <p><?php echo $paragraph?></p>
</body>

</html>