<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../style.css"/>
        <title>Hôtel des Arts</title>
    </head>

    <body>   
        <?php include("header.php"); ?>

        <?php include("resarapide.php"); ?>

        <section id="hotel">
            <section class="ligneArticleHotel">
                <article class="articleHotel">
                    <h2> Hôtel des Arts </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
                <article class="articleHotel">
                    <h2> La ville de Wimereux </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </section>
            <section class="ligneArticleHotel">
                <article class="articleHotel">
                    <h2> Nos chambres </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
                <article class="articleHotel">
                    <h2> Notre bar </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </section>
        </section>

        <section>
          <h3> Galerie Photos </h3>
          <hr>
          <div id="carousel">
            <button id="left"><</button>
            <img id="carousel_image" src="../images/hotel_1.jpg" alt="image de l'hôtel"/>
            <button id="right">></button>
          </div>
        </section>

        <script src="../js/hotel.js"></script>
        
    </body>
</html>