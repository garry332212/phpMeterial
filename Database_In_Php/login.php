<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <!-- creating a login form using bootsrp for styiling -->
  <div class="container d-flex align-items-center justify-content-center mt-3">
    <div class="col-sm-3">
      <form action="login.php" method="post">
        <div class=" form-group mt-3 ">
          <label for=" username">Username</label>
          <input type="text" class="form-control" name="username" />
        </div>

        <div class="form-group">
          <label for="username">Password</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <div id=" emailHelp" class="form-text">We'll never share your details with anyone else.
        </div>
        <button type="submit" class="btn btn-primary mt-3" name='submit'>Submit</button>
    </div>
    </form>

  </div>
  <?php error_reporting(0); //! temporary removing the warnings from the viewport



  include "database_connect.php";  //*database_connection file

  //*Getting form data
  $submit = $_POST['submit'];
  $user = $_POST['username'];
  $pass = $_POST['password'];



  if (isset($submit)) {

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


  ?>
</body>

</html>