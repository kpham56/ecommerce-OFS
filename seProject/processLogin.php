
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

          // create connection
          $conn = mysqli_connect("localhost", "root", "", "users");
          // check connection
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

          // register user
          $sql = "SELECT * FROM students WHERE username='$username' AND password='$password'";

          $results = mysqli_query($conn, $sql);
          if ($results->num_rows>0) {
            echo "Successful Login";
          } else {
             echo "Invalid Username or Password";
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
