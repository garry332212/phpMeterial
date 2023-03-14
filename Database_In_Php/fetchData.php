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
  include "database_connect.php";
  include "loginForm.php";


  $searchInput = $_POST['search'];
  $searchbtn = $_POST['searchbtn'];
  $query = "SELECT * FROM `newusers` WHERE username LIKE '%$searchInput%'";
  $results = mysqli_query($connection, $query);

  if (isset($searchbtn)) {
    if ($searchInput) {
      while ($num = mysqli_fetch_assoc($results)) {
        echo "<pre class= 'container w-50 m-3 data'>" . $num['username'] . "<br></pre>";
      }
    } else {
      echo "<pre class='container text-danger mt-3'>Enter Something<br></pre>";
    }
  }

  ?>





</body>

</html>