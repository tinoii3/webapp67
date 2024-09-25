<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome Page</title>
    <link rel="stylesheet" href="welstyle.css">
  </head>
  <body>
    <nav>
      <a href="main.html">Home</a>
      <a href="login.html">Logout</a>
    </nav>
    <div class="container">
      <div class="welcome-msg">
        <?php
        $showuser = $_POST['uname'];
        echo "Hi $showuser,<br>";
        echo "Welcome to CS Supermarket";
        ?>
      </div>
      <a href="shopping.html" class="btn">Shopping here!</a>
    </div>
  </body>
</html>
