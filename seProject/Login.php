
<html>
  <head>
    <title> Login</title>
  </head>
  <body>
    <h1> Login</h1>
    <?php
      echo "Please enter your username and password below";
    ?>
    <form action="/processLogin.php" method = "post">
      Username: <input type="text" name="username">
       Password: <input type="password" name="password">
      <input type="submit"value="Login">
    </form>
  </body>
</html>
