
<html>
  <head>
    <title> Processing </title>
  </head>
  <body>
    <h1>Processing</h1>
    <?php
    if(isset($_POST["email"]) && isset($_POST["pswd"])){

    $email = $_POST["email"];
    $password = $_POST["pswd"];

    $conn = mysqli_connect("localhost", "root","password","OFSaccounts");
    if (!$conn){
      die ("Connection Failed: " . mysqli_connect_error());
        }
    $sql = "INSERT INTO accounts (email, password) VALUES ('$email', '$password')";
    $results = mysqli_query($conn, $sql);
    if ($results){
      echo "Sucess, user added";
      }else{
        echo "ERROR <br> Username must be unique, and password not null<br>";
        echo "mysqli_error($sql)";
        header( "refresh:2;url=Registration.html" );

      }
    }

    else{
        echo "Form was not submitted.";
      }
      header( "refresh:2;url=homepage.html" );
     ?>

  <body>
</html>
