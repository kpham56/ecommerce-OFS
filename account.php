


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Account page">
    <meta name="author" content="Hoai An Nguyen">

    <title>Organic Food Store - Account</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <link href="path/to/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
    <script src="path/to/bootstrap-editable/js/bootstrap-editable.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <?php include 'components/navigation-bar.php'; ?>
    <?php

      include('php/connect.php');
      $email = $_SESSION['email'];
      $sqllname = "SELECT * FROM users WHERE email = '$email'";
      $lname = mysqli_query($con, $sqllname);


      $result = mysqli_fetch_array($lname);
    ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="card mt-4">
            <div class="card-body">
              <h2>Hello, <?php echo $result['firstname']." ".$result['lastname']; ?><br></h2>
            </h1>
              <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Info')" id="defaultOpen">Profile and Password</button>
              <button class="tablinks" onclick="openCity(event, 'Orders')">Orders</button>
              <button class="tablinks" onclick="openCity(event, 'Payment')">Payment Method</button>
              </div>

              <div id="Info" class="tabcontent">
                <div style="padding: 20px 60px 40px 60px">
                  <h4>Profile and Password</h4>
                  <div class="Mycontainer">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="fname" class="control-label">First Name</label>
                          <input type="text" class="form-control" id="fname" disabled value="<?php echo $result['firstname']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname" class="control-label">Last Name</label>
                          <input type="text" class="form-control" id="lname" disabled value="<?php echo $result['lastname']; ?>">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4" class="control-label">Email</label>
                          <input type="email" class="form-control" id="email" disabled   value="<?php echo $result['email']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4" class="control-label">Password</label>
                          <input type="password" class="form-control" id="psw" disabled placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="address" class="control-label">Address</label>
                        <input type="text" class="form-control" id="address" disabled value="<?php echo $result['streetname']; ?>">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity" class="control-label">City</label>
                          <input type="text" class="form-control" id="city" value="<?php echo $result['city']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState" class="control-label">State</label>
                          <input type="text" class="form-control" id="state" disabled value="<?php echo $result['state']; ?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip" class="control-label">Zip</label>
                          <input type="text" class="form-control" id="zip" value="<?php echo $result['zipcode']; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="edit" class="btn btn-success" id="edit" onclick="return handleEdit()">Edit</button>
                          <button type="submit" class="btn btn-success" id="save" hidden>Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>



              <div id="Orders" class="tabcontent">
                <div style="padding: 20px 50px 40px 50px">
                  <h4>Previous Orders</h4>
                  <br>
                  <!-- Insert Table from database -->
                </div>
              </div>



              <div id="Payment" class="tabcontent">
                <div class="Mycontainer">
                  <form>
                    <div style="padding: 20px 50px 40px 50px">
                      <h4>Payment Method</h4>
                      <div style="padding: 20px 40px 40px 40px">
                        <div class="card-logos">
                          <a href="https://www.freepnglogos.com/images/visa-logo-png-2026.html" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/visa-and-mastercard-logo-26.png" width="200" alt="visa and mastercard logo" /></a>
                        </div>
                        <br>
                        <h5>Credit or debit card</h5>
                        <br>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="fnameCard" class="control-label">Cardholder's Name</label>
                              <input type="text" class="form-control" id="cardholder" disabled placeholder="First Name Last name" name = "cardHolderName">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="lnameCard" class="control-label">Card Number</label>
                              <input type="text" class="form-control" id="cardnumber" disabled placeholder="Card Number">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="expirationM" class="control-label">Month</label>
                              <input type="text" class="form-control" id="expirationM" disabled placeholder="MM">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="expirationY" class="control-label">Year</label>
                              <input type="text" class="form-control" id="expirationY" disabled placeholder="YY" >
                            </div>
                            <div class="form-group col-md-4">
                              <label for="securityC" class="control-label">Security Code</label>
                              <input type="text" class="form-control" id="securityCode" disabled  placeholder="CVC">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="edit" class="btn btn-success" id="editPayment" onclick="return handlePaymentEdit()">Edit</button>
                            <button type="submit" class="btn btn-success" id="savePayment" hidden>Save Changes</button>
                          </div>
                        </div>
                     </div>
                  </form>

                </div>
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

    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();

      // Edid and save personal info
      function handleEdit() {
        document.getElementById('fname').disabled = false;
        document.getElementById('lname').disabled = false;
        document.getElementById('email').disabled = false;
        document.getElementById('psw').disabled = false;
        document.getElementById('address').disabled = false;
        document.getElementById('city').disabled = false;
        document.getElementById('state').disabled = false;
        document.getElementById('zip').disabled = false;
        document.getElementById('edit').hidden = true;
        document.getElementById('save').hidden = false;

        return false;
      }

      function handlePaymentEdit() {
        document.getElementById('cardholder').disabled = false;
        document.getElementById('cardnumber').disabled = false;
        document.getElementById('expirationM').disabled = false;
        document.getElementById('expirationY').disabled = false;
        document.getElementById('securityCode').disabled = false;
        document.getElementById('editPayment').hidden = true;
        document.getElementById('savePayment').hidden = false;

        return false;
      }
    </script>
  </body>

</html>
