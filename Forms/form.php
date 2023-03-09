<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css" />
  <title>Forms</title>
</head>

<body>
  <!-- Taking Input from a user -->
  <form action="form_process.php" method="post">
    <label>User Name</label>
    <input type="text" placeholder="Enter Username" name="userName" autofocus /> <br>
    <label>Password</label>
    <input type="password" placeholder="Password" name="password" /><br><br>
    <button type="submit" name="submit">Submit</button>
  </form>

</body>

</html>