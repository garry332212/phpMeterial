 <?php error_reporting(0); //! temporary removing the warnings from the viewport

include "functions.php";
  $submit = $_POST['submit'];
  if (isset($submit)) {

    logIn();
  }


  ?>