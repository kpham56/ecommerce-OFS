
<html>
  <head>
    <title> Processing </title>
  </head>
  <body>
    <h1>Processing</h1>
    <?php
    if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["fname"]) && isset($_POST["lname"]) &&
     isset($_POST["address"]) && isset($_POST["city"]) && isset($_POST["state"]) && isset($_POST["zip"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];

    $conn = mysqli_connect("localhost", "root","password","OFSaccounts");
    if (!$conn){
      die ("Connection Failed: " . mysqli_connect_error());
        }

    $sql = "INSERT INTO users (firstname, lastname, password, email, streetname, city, state, zip)
    VALUES ('$firstName', '$lastName', '$password', '$email', '$address', '$city', '$state', '$zip')";

    $results = mysqli_query($conn, $sql);
    if ($results){
      echo "Sucess, user added";
      }else{
        echo "mysqli_error($sql)";
        //header( "refresh:2;url=Registration.html" );

      }
    }

    else{
        echo "Form was not submitted.";
      }
      //header( "refresh:2;url=homepage.html" );
     ?>

  <body>
</html>
