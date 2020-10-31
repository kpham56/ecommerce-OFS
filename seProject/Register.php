
<html>
  <head>
    <title> Registration</title>
  </head>
  <body>
    <h1> Registration</h1>
    <?php
      echo "Please enter your username and password below";
    ?>
    <form action="/process.php" method = "post">
      <br>Username: <input type="text" name="username">
       Password: <input type="password" name="password"> <br><br><br>
       Address: <input type="address" name="address">
       State: <input type="state" name="state">
       ZIP Code: <input type="zipcode" name="zipcode"><br><br><br>
       Card Number: <input type="cardnum" name="cardnum">
       CRV: <input type="crv" name="crv">
       Card Expiration: <input type="cardexpiration" name="cardexpiration">
       Card Name: <input type="cardname" name="cardname">

      <input type="submit"value="Register">
    </form>
  </body>
</html>
