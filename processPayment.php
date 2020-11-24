<html>
  <head>
    <title> Processing payment</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php

      if (isset($_POST["firstname"])&&isset($_POST["lastname"])&&isset($_POST["cardDigits"])){

          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $name = $firstname." ".$lastname;
          $card = $_POST["cardDigits"];
          $month = $_POST["expMonth"];
          $year = $_POST["expYear"];
          $exp = $month.$year;
          $cvc = $_POST["code"];
          $email = $_POST["email"];
          $streetname = $_POST["streetname"];
          $city = $_POST["city"];
          $state = $_POST["state"];
          $zipcode = $_POST["zip"];


          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $uid = mysqli_query($conn,"SELECT userID FROM users where email = '$email'");
          $id = mysqli_fetch_row($uid);
          //echo $id[0];
          $sql = "INSERT INTO payment (cardNumber, name, userID, secure, expiration) VALUES ('$card', '$name', '$id[0]', '$cvc','$exp')";
          $results = mysqli_query($conn, $sql);
          if ($results) {
            echo "The user has been added.";
          } else {
             echo mysqli_error($conn);
           }

           mysqli_close($conn); // close connection

    } else{
      echo "Form was not filled correctly";
    }
    ?>

  </body>
</html>
