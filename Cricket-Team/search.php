<?php

include "database_connect.php";

$searchInput = $_POST['search_name'];
$searchSubmit = $_POST['search'];

$query2 = "SELECT * FROM `signup` WHERE player_name LIKE '$searchInput'";
$searchResults = mysqli_query($connection, $query2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <title>Document</title>
</head>

<body>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Player Type</th>
      </tr>
    </thead>

    <?php 
    if (isset($searchSubmit)) :?>
    <?php if(!$searchInput) :?>
    <p class='text-danger'>Something Wrong </p><?php endif;?>
    <?php while ($row = mysqli_fetch_assoc($searchResults)):?> <tbody>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['player_name'] ?></td>
        <td><?php echo $row['player_type'] ?></td>
      </tr>
    </tbody>
    <?php endwhile;?>



  </table>
  <?php endif;?>
</body>

</html>