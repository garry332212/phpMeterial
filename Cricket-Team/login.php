<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
</body>

</html>
<?php error_reporting(0); //! temporary removing the warnings from the viewport


include "database_connect.php";  //*database_connection file
include "loginForm.php";


  //*Getting form data
  $submit = $_POST['submit'];
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $playerType = $_POST['playerType'];
 
  if (isset($submit)) {

    //*form validation
    if ($email && $pass && $full_name) {
      //?if the username and password is inserted then run the below
      //*Connect to the Database and add the query if connetion is successfull
      if ($connection) {
        //*storing query in a variable so we can reuse it 
        $query = "INSERT INTO signup(player_name,email, password,player_type)";
        $query .= "VALUE ('$full_name','$email', '$pass', '$playerType')";
        $results = mysqli_query($connection, $query); //*adding user input into the table

        echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-success'>New ".$playerType." ". $full_name . " Added Successfully</div>";
      } else {
        echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>Connection Failed</div>";
      }

      //*check the query if it's went through
      if (!$results) {
        die("<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>Submission Failed</div>");
      }
    } else { // if username & password is not inserted 
      echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>please fill in all the details</div>";
    }
  }


  ?>