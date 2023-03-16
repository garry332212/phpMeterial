<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>All Data</title>


</head>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    background: #eee;
  }

  .data {
    height: 10vh;
    width: 450px;
    background: #F6F7C1;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 1px 1px 10px 2px red;
    margin: 50px 10px 0;
    border-radius: 10px;
    font-size: 3rem;
    font-family: 'Indie Flower', cursive;
    text-decoration: none;


  }

  .button1 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;

    height: 300px;
    width: 100%;

  }

  .button1 a {
    margin-right: 20px;
  }
</style>

<body>


  <?php //!query to fetch all the result is inside functions.php fil
  include "functions.php";
  showAllResults();
  ?>


  <div class="button1">
    <a class="btn btn-primary btn-lg" href="./loginForm.php">Add</a>
    <a class="btn btn-success btn-lg" href="./updateData.php">Update</a>
  </div>

</body>

</html>