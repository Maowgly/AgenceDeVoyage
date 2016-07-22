<?php
  session_start();
  $_SESSION['civ'] = $_POST['civ'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['choix'] = $_POST['choix'];
  $_SESSION['maldives'] = array(
              'desc'=>'Les maldives - Le genou !',
              'titre'=>'maldives',
              'prix'=>'3000');
  $_SESSION['caraibes'] = array(
              'desc'=>'Les caraïbes - Le pied !',
              'titre'=>'caraïbes',
              'prix'=>'4500');
  $_SESSION['pandemonium'] = array(
                'desc'=>'Visite de Pandemonium',
                'titre'=>'pandemonium',
                'prix'=>'100');
  $_SESSION['slagathor'] = array(
                'desc'=>'La route du Slagathor',
                'titre'=>'slagathor',
                'prix'=>'250');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title>Nos Propositions</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
          <span class="sr-only">50% Complete</span>
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
          <form action="recapitulatif.php" method="post" id="formAgence2">
            <div class="form-group">
              <label for="selectCiv">Choix <?php echo $_SESSION['choix']; ?></label>
              <select class="form-control" id="selectCiv" name="selection" form="formAgence2">
                <option value="1">
                  <?php
                    if ($_SESSION['choix']=='Voyage') {
                      echo $_SESSION['maldives']['desc'].' - '.$_SESSION['maldives']['prix'].'€ par pers';
                    } else if ($_SESSION['choix']=='Excursion') {
                      echo $_SESSION['pandemonium']['desc'].' - '.$_SESSION['pandemonium']['prix'].'€ par pers';
                    };
                  ?>
                </option>
                <option value="2">
                  <?php
                    if ($_SESSION['choix']=='Voyage') {
                      echo $_SESSION['caraibes']['desc'].' - '.$_SESSION['caraibes']['prix'].'€ par pers';
                    } else if ($_SESSION['choix']=='Excursion') {
                      echo $_SESSION['slagathor']['desc'].' - '.$_SESSION['slagathor']['prix'].'€ par pers';
                    };
                  ?>
                </option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputNb">Nombre de personnes</label>
              <input type="number" class="form-control" id="inputNb" placeholder="Nombre de personne" name="nbPersonne" value="" min="1" max"100" required>
            </div>
            <button type="submit" id="agence_btn" class="btn btn-default">Estimation</button>
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
