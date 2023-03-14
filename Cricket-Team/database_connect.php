<?php


$sql_host = 'localhost'; //where the databse is hosted //?localhost in this case
$sql_user = 'root'; // username for the databse,
$sql_pass = ''; //* default password for localhost is ""
$sql_db = 'cricket_app'; //?your databse name goes here

//!Establishing database connection
$connection = @mysqli_connect(
  $sql_host,
  $sql_user,
  $sql_pass,
  $sql_db
);