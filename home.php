
<?php include 'components/navigation-bar.php'; ?>
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
    <?php include 'components/navigation-bar.php'; ?>


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
        <?php 
            include('php/connect.php');
            $sql = "SELECT * FROM productdetail";
            $result = mysqli_query($con, $sql);  

            while ($all_products = mysqli_fetch_array($result, MYSQLI_ASSOC)) :
        ?>
        <div class="column produce">
          <div class="card h-60">
            <a href="#"><img class="card-img-top" src="<?php echo $all_products['URL_image']; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="apple.html"><?php echo $all_products['productName']; ?></a>
              </h4>
              <h5>$<?php echo $all_products['price']; ?></h5>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>


        <div class="column <?php echo $category; ?>">
            <div class="card h-60">
            <form method="post" action="cart.php?action=add&id=<?php echo $productName; ?>">
              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="<?php echo $all_products['URL_image']; ?>" class="img-fluid" alt="Responsive image" /><br />
                <h4 class="text-info"><?php echo "<a href = 'item.php?ID={$$all_products['price']}'>{$all_products['productName']}</a>"; ?></h4>
                <h4 class="text-danger">$ <?php echo $all_products['price']; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $all_products['productName']; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $all_products['price']; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
              </div>
            </form>
            </div>
          </div>
      <?php endwhile; ?>        
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

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btngroup");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>
  </body>
</html>
