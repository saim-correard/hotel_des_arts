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

        <?php
            include("bddConnexion.php");

            $query = $bdd->query('SELECT nom,description,image FROM chambres');

            while($data = $query->fetch()) 
            {
            ?>
            <!--On récupère toutes les chambres en bases pour les afficher-->
                <div class="chambre">
                    <img src=<?php echo '"../images/chambres/'.htmlspecialchars($data['image']).'"'?> alt="image de l'hôtel"/>
                    <div class="chambreDesc">
                        <h3><?php echo htmlspecialchars($data['nom'])?></h3>
                        <p><?php echo nl2br(htmlspecialchars($data['description']))?></p>
                        <section id="resaRapideChambre">
                          <form method="post" action="">
                            <select name="" id="">
                              <option>Arrivée</option>
                            </select>
                            <select name="" id="">
                              <option>1 Nuit</option>
                              <option>2 Nuits</option>
                              <option>3 Nuits</option>
                              <option>4 Nuits</option>
                              <option>5 Nuits</option>
                              <option>6 Nuits</option>
                              <option>7 Nuits</option>
                              <option>8 Nuits</option>
                              <option>9 Nuits</option>
                              <option>10 Nuits</option>
                            </select>
                            <select name="" id="">
                              <option>1 Pers.</option>
                              <option>2 Pers.</option>
                              <option>3 Pers.</option>
                              <option>4 Pers.</option>
                              <option>5 Pers.</option>
                              <option>6 Pers.</option>
                              <option>7 Pers.</option>
                              <option>8 Pers.</option>
                              <option>9 Pers.</option>
                              <option>10 Pers.</option>
                            </select>
                            <input type="submit" value="Réserver"/>
                          </form>
                        </section>
                    </div>
                </div>
            <?php
            }
            $query->closeCursor();
        ?>
        <script src="../js/chambres.js"></script>
        
    </body>
</html>