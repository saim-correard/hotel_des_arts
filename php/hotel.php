<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">           
    <title>Hôtel des Arts</title>
  </head>

  <body class="container">   
    <?php include("header.php"); ?>
    <?php include("resarapide.php"); ?>

    <section class="container">
      <div class="row justify-content-between ligneArticleHotel">
        <div class="card col-lg-5">
          <img class="card-img-top" src="../images/card.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Hôtel des arts</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card col-lg-5">
          <img class="card-img-top" src="../images/card.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">La ville de Wimereux</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>              
      </div>
      <div class="row justify-content-between ligneArticleHotel">
        <div class="card col-lg-5">
          <img class="card-img-top" src="../images/card.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Nos Chambres</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card col-lg-5">
          <img class="card-img-top" src="../images/card.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Notre bar</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </section>

    <section id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">            
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../images/hotel_1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/hotel_2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/hotel_1.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/hotel_2.jpg" alt="Fourth slide">
        </div>
      </div>
    </section> 

    <?php include("js_bootstrap.php"); ?>
  </body>
</html>


