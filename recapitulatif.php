<?php
  session_start();
  $_SESSION['selection'] = $_POST['selection'];
  $_SESSION['nbPersonne'] = $_POST['nbPersonne'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
    <title>Récapitulatif</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <?php
      if ($_SESSION['choix']=='Voyage' && $_SESSION['selection']==1)  {
        $destination = $_SESSION['maldives']['titre'];
        $prixSelec = $_SESSION['maldives']['prix'];
      } else if ($_SESSION['choix']=='Voyage' && $_SESSION['selection']==2) {
        $destination = $_SESSION['caraibes']['titre'];
        $prixSelec = $_SESSION['caraibes']['prix'];
      } else if ($_SESSION['choix']=='Excursion' && $_SESSION['selection']==1) {
        $destination = $_SESSION['pandemonium']['titre'];
        $prixSelec = $_SESSION['pandemonium']['prix'];
      } else if ($_SESSION['choix']=='Excursion' && $_SESSION['selection']==2) {
        $destination = $_SESSION['slagathor']['titre'];
        $prixSelec = $_SESSION['slagathor']['prix'];
      };
      $prixTotal = $prixSelec*$_SESSION['nbPersonne'];
    ?>
      <header>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">100% Complete</span>
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
          <div class="greyBox recap">
            <br>
            <br>
            <div class="recapTexte">
              <p>Bonjour, <?php echo $_SESSION['civ'].' '.$_SESSION['prenom'].' '.$_SESSION['nom']; ?></p>
              <p>Vous avez choisi <?php
                  if ($_SESSION['choix']==1) {
                    echo 'un voyage ';
                  } else if ($_SESSION['choix']==2) {
                   echo 'une excursion ';
                  };
                ?> <span class="destiColor">"<?php echo $destination; ?>"</span> au prix de <?php echo $prixSelec; ?>€ par personne</p>
              <p>Vous nous avez indiqué <?php echo $_SESSION['nbPersonne']; ?> personnes</p>
              <p>Le montant total est de <?php echo $prixTotal ?>€</p>
            </div>
            <a href="formulaire.php"><button type="submit" id="recapitulatif_btn" class="btn btn-default">Retour au formulaire</button></a>
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
