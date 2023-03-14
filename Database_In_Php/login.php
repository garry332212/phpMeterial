 <?php error_reporting(0); //! temporary removing the warnings from the viewport

  include "loginForm.php";



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