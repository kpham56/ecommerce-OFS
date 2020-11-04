
<html>
  <head>
    <title> Login </title>
  </head>
  <body>
    <?php
    if(isset($_POST["username"]) && isset($_POST["password"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    #making connection
    $conn = mysqli_connect("localhost", "root","password","users");
    if (!$conn){
      die ("Connection Failed: " . mysqli_connect_error());
        }

    $sql = "SELECT password FROM usernames where username = '$username'";

    #printing results
    $results = mysqli_query($conn, $sql);
    $login = False;
    if ($results){
      $row = mysqli_fetch_assoc($results);
      if ($row["password"] === $password){
        $login = True;
        #$sql = "SELECT * FROM students";
        echo "<h1> Welcome in! </h1>";
        echo "login success";
      } else{
        echo "<h1> Login Failed</h1>";
        echo "No matches to user and password in database";
      }
      }else{
        echo mysqli_error();
      }
    }

    else{
        echo "Form was not submitted.";
      }
     ?>
     <form action = "registration.html">
       <input type="submit" value="return home">
     </form>
  <body>
</html>
