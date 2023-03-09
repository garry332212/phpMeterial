<?php

//*super global variables getting info from the form
//$submit = $_POST['submit']; //form submission variable
$userName = $_POST['userName']; //userName input
$password = $_POST['password']; //user Password input


//!Form Validation will be used!
if (isset($_POST['submit'])) {

  //dummy data to match with user login Details

  $dummyData = ['gurvinder', 'harpreet', 'ramkaran', 'harnek', 'omkar', 'bota'];


  //*empty function checks if the form is empty
  if (empty($userName) && empty($password)) {
    echo "<br>please fill in the form<br>";

  } else if (empty($userName)) {
    echo "<br>please enter a username<br>";

  } else if (empty($password)) {
    echo "please enter a password";
  } else if (!in_array($userName, $dummyData)) {
    echo "user Not found";
  } else {
    echo "User Name:  $userName <br>Password: $password";
  }

}





?>