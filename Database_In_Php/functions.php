<?php

//to print all the ids so user can update selected id
function showData()
{
  include "database_connect.php";

  $query = "SELECT * FROM newusers";
  $results = mysqli_query($connection, $query);

  if (!$results) {
    die('Query Failed');
  }
  while ($data = mysqli_fetch_assoc($results)) {
    $id = $data['username'];
    echo "<option value='$id'>$id</option>";
  }
}


//showAll.php function  include "database_connect.php";
function showAllResults()
{
  include "database_connect.php";
  $query = "SELECT * FROM `newusers`";
  $results = mysqli_query($connection, $query);

  while ($num = mysqli_fetch_assoc($results)) {
    echo "<pre class= 'data'>" . $num['username'] . "<br></pre>";
  }
}


//*Updating the ddata function for updateData.php

function updateData()
{
  include "database_connect.php";
  $new_user = $_POST['updatedUser'];
  $new_pass = $_POST['updatedPass'];
  $id = $_POST['id'];
  $query = "UPDATE newusers SET username ='$new_user', password = '$new_pass' "; //!continue...
  $query .= "WHERE username = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$new_user && !$new_pass) {
    echo "<h1>Enter something</h1>";
  }

  //checking if query is sending us the results
  else if (!$result) {
    die("Query FAILED!!");
  } else {

    echo "<h1>$new_user updated</h1>";
  }
}


//*Login  function to use in login.php

function logIn()
{
  include "loginForm.php";
  include "database_connect.php";  //*database_connection file

  //*Getting form data

  $user = $_POST['username'];
  $pass = $_POST['password'];

  //*form validation
  if ($user && $pass) {
    //?if the username and password is inserted then run the below
    //*Connect to the Database and add the query if connetion is successfull
    if ($connection) {
      //*storing query in a variable so we can reuse it 
      $query = "INSERT INTO newusers(username, password)";
      $query .= "VALUE ('$user', '$pass')";
      $results = mysqli_query($connection, $query); //*adding user input into the table

      echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-success'>New User: " . $user . " Added Successfully</div>";
    } else {
      echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>Connection Failed</div>";
    }

    //*check the query if it's went through
    if (!$results) {
      die("<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>Submission Failed</div>");
    }
  } else { // if username & password is not inserted 
    echo "<div class='container d-flex align-items-center justify-content-center mt-3 text-danger'>please insert username & password</div>";
  }
}


//!searching user function to use in fetchData.php

function searchUser()
{
  include "database_connect.php";
  include "loginForm.php";
  $searchInput = $_POST['search'];
  $query = "SELECT * FROM `newusers` WHERE username LIKE '%$searchInput%'";
  $results = mysqli_query($connection, $query);

  if ($searchInput) {
    while ($num = mysqli_fetch_assoc($results)) {
      echo "<pre class= 'container w-50 m-3 data'>" . $num['username'] . "<br></pre>";
    }
  } else {
    echo "<pre class='container text-danger mt-3'>Enter Something<br></pre>";
  }
}
