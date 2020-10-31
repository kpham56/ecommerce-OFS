
<html>
  <head>
    <title> Processing File</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php
      if (isset($_POST["username"])&&isset($_POST["password"])){
        if($_POST["username"] && $_POST["password"]){
          $username = $_POST["username"];
          $password = $_POST["password"];
          $address = $_POST["address"];
          $state = $_POST["state"];
          $zipcode = $_POST["zipcode"];
          $cardnum = $_POST["cardnum"];
          $crv = $_POST["crv"];
          $cardexpiration = $_POST["cardexpiration"];
          $cardname = $_POST["cardname"];


          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "INSERT INTO students (username, password, address, state, zipcode, cardnum, crv, cardexpiration, cardname)
          VALUES ('$username', '$password', '$address','$state','$zipcode','$cardnum','$crv','$cardexpiration','$cardname')";

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
