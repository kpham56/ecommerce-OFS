  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <img src="../pic/grapelogo.jpg" alt="OFS Store logo" style="width:5%; padding: 3px 5px 3px 3px;">
        <a class="navbar-brand" href="../homepage.php">Organic Food Store</a>

        <!-- Search -->
        <form class="form-inline" action="../php/authentication.php">
          <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
          <button class="btn btn-success" type="submit" name="user-search">Search</button>
        </form>

        <!-- Navigaton tabs -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active" data-toggle="dropdown" href="account.php">Account</a>
              <div class="dropdown-menu">

              <?php
                    session_start();
                    include 'isLoggedin.php';
                ?>

                <a class="dropdown-item" href="account.php">My Account</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Shopping Cart</a>
            </li>
          </ul>
      </div>
    </nav>
    <hr>
