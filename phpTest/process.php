
<html>
  <head>
    <title> Processing </title>
  </head>
  <body>
    <h1>Processing</h1>
    <?php
    if(isset($_POST["username"]) && isset($_POST["password"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root","password","users");
    if (!$conn){
      die ("Connection Failed: " . mysqli_connect_error());
      echo "connection didnt work";
        }
    $sql = "INSERT INTO usernames (username, password) VALUES ('$username', '$password')";
    $results = mysqli_query($conn, $sql);
    if ($results){
      echo "Sucess, user added";
      }else{
        echo "ERROR <br> Username must be unique, and password not null<br>";
        echo "mysqli_error($sql)";

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
