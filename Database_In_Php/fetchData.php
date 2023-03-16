<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Data</title>
</head>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;

  }

  .data {
    height: 10vh;
    width: 50px;
    background: navajowhite;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 1px 1px 10px 2px red;
    margin: 10px;
    border-radius: 10px;
    font-size: 3rem;

  }
</style>

<body>
  <?php
  include "functions.php";
  $searchbtn = $_POST['searchbtn'];
  if (isset($searchbtn)) {
    searchUser();
  }
  ?>

</body>

</html>