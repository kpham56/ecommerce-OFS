<html>
  <head>
    <title> Processing File</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php
      if (isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["streetname"])&&isset($_POST["city"])){

          $firstname = $_POST["fname"];
          $lastname = $_POST["lname"];
          //$userid = $_POST["userid"];
          //$userType = $_POST["userType"];
          $password = $_POST["password"];
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
          $sql = "INSERT INTO users (firstname, lastname, password, email, streetname, city, state, zipcode) VALUES ('$firstname', '$lastname', '$password','$email','$streetname','$city','$state','$zipcode')";

          $results = mysqli_query($conn, $sql);
          if ($results) {
            echo "The user has been added.";
          } else {
             echo mysqli_error($conn);
           }

           mysqli_close($conn); // close connection

    } else{
      echo "Form was not submitted";
    }
    ?>

  </body>
</html>
