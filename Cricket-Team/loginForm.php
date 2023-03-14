<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</head>


<body>
  <div class="login">
    <h1 class="text-center">Sign Up</h1>

    <form class="form-group" action="login.php" method="post">
      <div class="form-group">
        <label class="form-label" for="name">Player's Full Name</label>
        <input class="form-control" type="text" name="full_name">
      </div>
      <div class="form-group">
        <label class="form-label" for="email">Email Address</label>
        <input class="form-control" type="email" name="email">

      </div>

      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password">
      </div>

      <div class="form-group">
        <select class="form-select" aria-label="Default select example" name="playerType">';
          <option value="">---Player Type---</option>
          <option value="Batsman">Batsman</option>
          <option value="Bowler">Bowler</option>
          <option value="All-Rounder">All-Rounder</option>
        </select>
      </div>

      <input class="btn btn-primary w-100" type="submit" value="Sign In" name="submit">
    </form>

  </div>


  <div class="login">
    <h1 style="font-size: 40px;">Search a Player</h1>
    <form class="form-group" action="search.php" method="post">
      <div class="form-group">
        <label class="form-label" for="name">Player's Full Name</label>
        <input class="form-control" type="text" name="search_name">
      </div>
      <div class="form-group text-center">
        <input class=" btn btn-primary w-50 " type="submit" value="Search" name="search">
      </div>
    </form>
  </div>
  <?php
  
  ?>
</body>

</html>