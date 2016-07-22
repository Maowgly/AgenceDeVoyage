<?php
  session_start();
  $_SESSION['civ'] = 0;
  $_SESSION['nom'] = 0;
  $_SESSION['prenom'] = 0;
  $_SESSION['choix'] = 0;
  $_SESSION['selection'] = 0;
  $_SESSION['nbPersonne'] = 0;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title>Bienvenue</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
          <span class="sr-only">0% Complete</span>
        </div>
      </div>
    </header>
    <div class="boite">
      <div class="nameBox">
        <div class="siteName">
          FAST-TRAVEL
        </div>
      </div>
      <div class="tube">
        <div class="greyBox">
          <form action="agence.php" method="post" id="formAgence">
            <div class="form-group">
              <label for="selectCiv">Civilité</label>
              <select class="form-control" id="selectCiv" name="civ" form="formAgence">
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
                <option value="Mademoiselle">Mlle</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputNom">Nom</label>
              <input type="text" class="form-control" id="inputNom" placeholder="Votre nom" name="nom" value="" required>
            </div>
            <div class="form-group">
              <label for="inputPrenom">Prénom</label>
              <input type="text" class="form-control" id="inputPrenom" placeholder="Votre prénom" name="prenom" value="" required>
            </div>
            <div class="radio">
              <label class="radio-inline">
                <input type="radio" id="inlineRadio1" name="choix" value="Voyage" checked> Voyage
              </label>
              <label class="radio-inline">
                <input type="radio" id="inlineRadio2" name="choix" value="Excursion"> Excursion
              </label>
            </div>
            <button type="submit" id="formulaire_btn" class="btn btn-default">Suite</button>
          </form>
        </div>
      </div>
      <div class="basDePage">
      </div>
    </div>
    <footer class="footer foot">
      <div class="container">
        <p class="text-muted">&copy; 2016 Fast-Travel</p>
      </div>
    </footer>
  </body>
</html>
