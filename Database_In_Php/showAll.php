<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

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
  width: 450px;
  background: #F6F7C1;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 1px 1px 10px 2px red;
  margin: 10px;
  border-radius: 10px;
  font-size: 3rem;
  font-family: 'Indie Flower', cursive;
  text-decoration: none;
}
</style>

<body>
  <?php
  include "database_connect.php";
  $query = "SELECT * FROM `newusers`";
  $results = mysqli_query($connection, $query);

      while ($num = mysqli_fetch_assoc($results)) {
        echo "<pre class= 'data'>" . $num['username'] . "<br></pre>";
      }
  
  ?>



  <a class="data" href="./loginForm.php">Go-Back</a>

</body>

</html>