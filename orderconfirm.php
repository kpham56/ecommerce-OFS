<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cart page">
    <meta name="author" content="Hoai An Nguyen">

    <title>Organic Food Store - Account</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php include 'components/navigation-bar.php';
    include('php/connect.php');

    $email = $_SESSION['email'];
    $sqllname = "SELECT * FROM users WHERE email = '$email'";
    $lname = mysqli_query($con, $sqllname);
    $usersTable = mysqli_fetch_array($lname);
    $uID = $usersTable['userID'];
    $price = $_SESSION['total'];
    $orderID = uniqid();
    $date = date('Y-m-d');
    $sql2 = "INSERT INTO orderstatus (orderID, userID, price, orderDate) VALUES ('$orderID', '$uID', '$price', '$date')";
    $payq = mysqli_query($con, $sql2);
    ?>


    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="card mt-4">
            <div class="card-body">
              <div style="padding: 20px 80px 40px 80px">
                <h2>Order #<?php echo $orderID ?> was successufully placed.</h2>
                <p>Confirmation email will be sent to <?php echo $email; ?></p>
              </div>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-4">

        </div>
        <!-- /.col-lg-4 -->
      </div>

    </div>
    <!-- /.container -->
    <hr>
    <!-- Footer -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Organic Food Store 2020</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  <script src="cart.js"></script>

</html>
