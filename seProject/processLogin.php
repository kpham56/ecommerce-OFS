
<html>
  <head>
    <title> Processing File</title>
  </head>
  <body>
    <h1> Processing</h1>
    <?php
      if (isset($_POST["email"])&&isset($_POST["password"])){
        if($_POST["email"] && $_POST["password"]){
          $email = $_POST["email"];
          $password = $_POST["password"];

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

          $results = mysqli_query($conn, $sql);
          if ($results->num_rows>0) {
            echo "Successful Login";
          } else {
             echo "Invalid e-mail or Password";
           }

           mysqli_close($conn); // close connection
        }
        else{
          echo "E-Mail or password is empty";
        }
    } else{
      echo "Form was not submitted";
    }
    ?>

  </body>
</html>
