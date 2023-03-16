<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  <title>Login</title>

  <style>
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <!-- creating a login form using bootstrap for styiling -->
  <div class="container d-flex align-items-center justify-content-center mt-3">
    <div class="col-sm-3">
      <form action="updateData.php" method="post">
        <div class=" form-group mt-3 ">
          <label for=" username">Username</label>
          <input type="text" class="form-control" name="updatedUser" />
        </div>

        <div class="form-group">
          <label for="username">Password</label>
          <input type="password" class="form-control" name="updatedPass" />
        </div>


        <br><br>

        <div class="form-group">

          <select name="id" class="form-select" aria-label="Default select example">
            <option selected>Choose user to update </option>

            <?php
            showData();
            ?>

          </select> <button type=" submit" class="btn btn-primary mt-3" name='update'>Update</button>

        </div>
      </form>


      <br><br>
      <!-- SEARCH FORM FOR FETCHING FROM DATABSE -->
      <form action="fetchData.php" method="post">
        <div class="form-group">
          <label for="searchUser">Search Users or</label>

          <a href="./showAll.php">Show All Users</a>

          <input type="text" class="form-control" name="search" />
        </div>
        <button type="submit" class="btn btn-success mt-3 w-100" name='searchbtn'>Search</button>
      </form>

    </div>



</body>

</html>

<?php
// error_reporting(0);


//*Getting update form data
if (isset($_POST['update'])) {
  updateData();
}


?>