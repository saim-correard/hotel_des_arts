<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title>Hôtel</title>
    </head>

    <body class="container">   

      <?php include("header.php"); ?>


      <section id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../images/hotel_1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/hotel_2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/hotel_3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/hotel_4.jpg" alt="Fourth slide">
          </div>
        </div>
      </section>

      <section id="news">
        <h2>News</h2>
        <hr/>
        <?php
        include("bddConnexion.php");

        $query = $bdd->query('SELECT * FROM news');

        while($data = $query->fetch()) 
        {
        ?>
        <!--On récupère toutes les news en bases pour les afficher-->
          <div class="news">
            <img src=<?php echo '"../images/news/'.htmlspecialchars($data['image']).'"'?> alt="image de l'hôtel"/>
            <div class="newsDesc">
              <h3><?php echo htmlspecialchars($data['titre'])?></h3>
              <p><?php echo nl2br(htmlspecialchars($data['texte']))?></p>
            </div>
          </div>  
        <?php
        }
        $query->closeCursor();
      ?>
      </section>
		
		<?php include("js_bootstrap.php"); ?>
    </body>
</html>
<script src="../js/home.js"></script>