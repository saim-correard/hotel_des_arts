<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css"/>
        <title>Finalisation de la reservation</title>
    </head>

    <body class="container">

        <?php include("header.php"); ?>

        <h3>Informations personnelles</h3>

        <p>
          vos infos bla bla
        </p>

        <form>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputCivilite" class="col-form-label">Civilité</label>
              <select id="inputCivilite" class="form-control">Madame</select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNom" class="col-form-label">Nom</label>
              <input type="email" class="form-control" id="inputNom" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPrenom" class="col-form-label">Prénom</label>
              <input type="password" class="form-control" id="inputPrenom" placeholder="Prénom">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAdresse" class="col-form-label">Adresse</label>
            <input type="text" class="form-control" id="inputAdresse" placeholder="Adresse">
          </div>
          <div class="form-group">
            <label for="inputAdresse2" class="col-form-label">Complement d'adresse</label>
            <input type="text" class="form-control" id="inputAdresse2" placeholder="Complement d'adresse">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCodePostal" class="col-form-label">Code Postal</label>
              <input type="text" class="form-control" id="inputCodePostal" placeholder="Code Postal">
            </div>
            <div class="form-group col-md-6">
              <label for="inputVille" class="col-form-label">Ville</label>
              <input type="text" class="form-control" id="inputVille" placeholder="Ville">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTelephone" class="col-form-label">Téléphone</label>
            <input type="text" class="form-control" id="inputTelephone" placeholder="Téléphone">
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-form-label">E-mail</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="inputConfirmEmail" class="col-form-label">Confirmation E-mail</label>
            <input type="text" class="form-control" id="inputConfirmEmail" placeholder="Confirmation E-mail">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> J'accepte les <a href="#">conditions de vente</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Je règle la réservation</button>
        </form>


		    <?php include("js_bootstrap.php"); ?>

        <?php include("footer.php"); ?>
    </body>
</html>
