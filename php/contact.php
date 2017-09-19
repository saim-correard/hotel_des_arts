<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css"/>
        <title>Hôtel</title>
    </head>

    <body class="container">

        <?php include("header.php"); ?>

        <h3>Accès</h3>

        <p>
          Adresse : 143 Rue Carnot, 62930 Wimereux
        </p>

        <div class="map-responsive col-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="auto" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <h3>Contact</h3>

        <form>
          <div class="row col-9 justify-content-between">
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Votre nom">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Votre adresse e-mail">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Votre numéro de téléphone">
            </div>
          </div>
          <div class="form-group col-9 justify-content-between">
            <label for="exampleFormControlTextarea1">Votre message :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
          </div>
          <div class="col-5 float-right">
            <button type="button" class="btn btn-success">Envoyer</button>
          </div>
        </form>


		    <?php include("js_bootstrap.php"); ?>

        <?php include("footer.php"); ?>
    </body>
</html>
