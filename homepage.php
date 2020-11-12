<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFS Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <img src="pic/logogrape.png" alt="OFS Store logo" style="width:5%; padding: 3px 5px 3px 3px;">
        <a class="navbar-brand" href="homepage.html">Organic Food Store</a>

        <!-- Search -->
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>

        <!-- Navigaton tabs -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="homepage.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="account.html">Account</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="login.html">Log In</a>
                <a class="dropdown-item" href="registration.html">Register</a>
                <a class="dropdown-item" href="account.html">My Account</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.html">Shopping Cart</a>
            </li>
          </ul>
        </div>
      </nav>
      <hr><hr>
      <hr>


      <!-- MAIN (Center website) -->
      <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="pic/slide3.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="pic/slide2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="pic/slide1.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
      <hr>

      <h2>Products</h2>
      <div class="main">
      <div class="column menu active">
      <div id="myBtnContainer">
        <button class="btngroup" onclick="filterSelection('all')">Show all</button>
        <button class="btngroup" onclick="filterSelection('produce')">Produce</button>
        <button class="btngroup" onclick="filterSelection('dairy')">Dairy & Eggs</button>
        <button class="btngroup" onclick="filterSelection('meat')">Meat</button>
        <button class="btngroup" onclick="filterSelection('snacks')">Snacks</button>
      </div>
      </div>

      <!-- Grid -->
      <div class="row">
        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/Honeycrisp-Apple.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="apple.html">Honeycrisp Apples</a>
              </h4>
              <h5>$1.99/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/strawberry.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Strawberries</a>
              </h4>
              <h5>$5.89/lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/lemon.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Lemons</a>
              </h4>
              <h5>$3.99/lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/avocado.jpeg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Hass Avocados</a>
              </h4>
              <h5>$2.79/each</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/crackers.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Late July Crackers</a>
              </h4>
              <h5>$3.79</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/popcorn.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Sea Salt Popcorn</a>
              </h4>
              <h5>$3.69</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/eggs.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Conestoga Eggs, 6 eggs</a>
              </h4>
              <h5>$5.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/broccoli.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Broccoli</a>
              </h4>
              <h5>$2.99/lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/fruit.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Fruit Snacks</a>
              </h4>
              <h5>$6.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/celery.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Celery Bunch</a>
              </h4>
              <h5>$2.69</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/beet.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Crispy Chews</a>
              </h4>
              <h5>$3.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="banana.html"><img class="card-img-top" src="pic/banana.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="banana.html">Organic Bananas</a>
              </h4>
              <h5>$4.49/3lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/mango.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Mangoes</a>
              </h4>
              <h5>$3.99/lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/waffles.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Waffles</a>
              </h4>
              <h5>$3.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/teethers.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Baby Teethers</a>
              </h4>
              <h5>$3.39</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/creamcheese.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Valley Cream Cheese</a>
              </h4>
              <h5>$2.99</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
            <div class="card h-60">
              <a href="#"><img class="card-img-top" src="pic/milk.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Organic Valley Whole Milk</a>
                </h4>
                <h5>$14.99</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="column snacks">
            <div class="card h-60">
              <a href="#"><img class="card-img-top" src="pic/creamies.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Organic Creamies</a>
                </h4>
                <h5>$3.59</h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/steak.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Boneless Beef Ribeye Steak</a>
              </h4>
              <h5>$14.99/lb</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/peppercheese.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Pepper Jack Cheese</a>
              </h4>
              <h5>4.99</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chickenwings.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Chicken Wings</a>
              </h4>
              <h5>$6.49</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/cacao.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Snacks Cacao</a>
              </h4>
              <h5>$9.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chicken.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Chicken Breast</a>
              </h4>
              <h5>$5.49</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chickentenders.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Chicken Tenders</a>
              </h4>
              <h5>$6.59</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/stringcheese.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Mozzarella String Cheese</a>
              </h4>
              <h5>$2.93</h5>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/veggiepops.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Veggie Pops</a>
              </h4>
              <h5>$5.54</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/coconut.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Coconut Snack</a>
              </h4>
              <h5>$3.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/sausage.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Beef Sausage</a>
              </h4>
              <h5>$6.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/turkeybreast.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Beef Sausage</a>
              </h4>
              <h5>$6.68</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/turkeybacon.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Turkey Bacon</a>
              </h4>
              <h5>$8.48</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/jerky.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Tibble's Jerky</a>
              </h4>
              <h5>$11.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/turkeyburger.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Turkey Burger</a>
              </h4>
              <h5>$11.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/ham.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Uncured Ham</a>
              </h4>
              <h5>$11.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/carrot.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Carrots Bunch</a>
              </h4>
              <h5>$4.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/tomatoes.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Tomatoes</a>
              </h4>
              <h5>$2.12/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/butter.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Cured Butter</a>
              </h4>
              <h5>$8.69</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/heavycream.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Heavy Cream</a>
              </h4>
              <h5>$6.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/cottagecheese.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Lowfat Cottage Cheese</a>
              </h4>
              <h5>$6.17</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/yogurt.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Plain Yogurt</a>
              </h4>
              <h5>$3.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/vanillayogurt.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Vanilla Yogurt</a>
              </h4>
              <h5>$4.99</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>


        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chocolatemilk.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Chocolate Milk</a>
              </h4>
              <h5>$4.19</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column dairy">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/sourcream.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Sour Cream</a>
              </h4>
              <h5>$5.08</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/lambshank.jpeg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Lamb Shank</a>
              </h4>
              <h5>$8.08/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column meat">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/backribs.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Back Ribs</a>
              </h4>
              <h5>$5.00/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chocolatebar.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Chocolate Bar</a>
              </h4>
              <h5>$3.29</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/chocolatecookies.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Chocolate Chips Cookies</a>
              </h4>
              <h5>$3.48</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/grapes.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Red Grapes</a>
              </h4>
              <h5>$3.49/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>


        <div class="column snacks">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="pic/greengrapes.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Organic Green Grapes</a>
              </h4>
              <h5>$3.00/lb</h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>

    <!-- END GRID -->
    </div>

    <!-- END MAIN -->
    </div>

    <!-- Footer -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Organic Food Store 2020</p>
      </div>
    </footer>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        w3AddClass(x[0], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    </script>
  </body>
</html>
