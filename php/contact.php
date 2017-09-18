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

        <h3>Accès</h3>

        <div class="map-responsive col-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <h3>Contact</h3>

        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Votre nom">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Votre adresse e-mail">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Votre numéro de téléphone">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre message :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
          </div>
            <button type="button" class="btn btn-success">Envoyer</button>          
        </form>


		    <?php include("js_bootstrap.php"); ?>

        <?php include("footer.php"); ?>
    </body>
</html>
