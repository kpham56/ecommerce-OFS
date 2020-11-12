
<html>
  <head>
    <title> Processing File</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php
      if (isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["email"])&&isset($_POST["streetname"])&&isset($_POST["city"])){
        if($_POST["email"] && $_POST["password"]){
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $userid = $_POST["userid"];
          $userType = $_POST["userType"];
          $password = $_POST["password"];
          $email = $_POST["email"];
          $streetname = $_POST["streetname"];
          $city = $_POST["city"];
          $state = $_POST["state"];
          $zipcode = $_POST["zipcode"];


          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "INSERT INTO users (firstname, lastname, userid, username, userType, password, email, streetname, city, state, zipcode)
          VALUES ('$firstname', '$lastname','$userid', '$username', '$userType','$password','$email','$streetname','$city','$state','$zipcode')";

          $results = mysqli_query($conn, $sql);
          if ($results) {
            echo "The user has been added.";
          } else {
             echo mysqli_error($conn);
           }

           mysqli_close($conn); // close connection
        }
        else{
          echo "Username or password is empty";
        }
    } else{
      echo "Form was not submitted";
    }
    ?>

  </body>
</html>
