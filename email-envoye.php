<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Hackers Poulette - Réception de l'email</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="exercice php" />
<meta name="language" content="fr">
<meta name="theme-color" content="#68cfd0">

<!-- favicons -->
<link 
  rel="apple-touch-icon" 
  sizes="76x76" 
  href="apple-touch-icon-76x76.png" 
  />
<link
  rel="apple-touch-icon"
  sizes="114x114"
  href="apple-touch-icon-114x114.png"
/>
<link
  rel="apple-touch-icon"
  sizes="120x120"
  href="apple-touch-icon-120x120.png"
/>
<link
  rel="apple-touch-icon"
  sizes="144x144"
  href="apple-touch-icon-144x144.png"
/>
<link 
rel="icon" 
sizes="196x196" 
href="favicon-196.png" type="image/png" 
/>

<link 
rel="icon" 
href="favicon.ico" 
/>

<meta name="msapplication-TileImage" content="favicon-144.png" />
<meta name="msapplication-TileColor" content="#FFFFFF" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- CSS  reset / style.css et GoogleFont-->
<link rel="stylesheet" type="text/css" href="assets/css/resetBootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

<!-- Header -->
<header>

<h1>Votre email est envoyé !</h1>
</header>

<div class="col-12 formulaire ">
<?php echo '<strong>Votre prénom : </strong>'.$_SESSION['prenom']; ?></div>

<div class="col-12 formulaireD ">
<?php echo '<strong>Votre nom : </strong>'.$_SESSION['nom']; ?></div>

<div class="col-12 formulaire ">
<?php echo '<strong>Votre e-mail : </strong>'.$_SESSION['email']; ?></div>

<div class="col-12 formulaireD ">
<?php echo '<strong>Votre genre : </strong>'.$_SESSION['genre']; ?></div>

<div class="col-12 formulaire ">
<?php echo '<strong>Votre pays : </strong>'.$_SESSION['pays']; ?></div>

<div class="col-12 formulaireD ">
<?php  
// Afficher Sujet(s)
// Session Sujet dans une variable
$sujet=$_SESSION['sujet'];
// Compte nombre de sujet(s)
$checked_count = count($_SESSION['sujet']);


echo $checked_count."<strong> sujet(s) sélectionné(s) : <br/></strong> ";
// Boucle et affichage des sujets
$nbrSujet=1;
for ($i=0; $i < $checked_count ; $i++) 
    {
      echo '<em>('.$nbrSujet.') : </em>'.$sujet[$i]." ";
      $nbrSujet=$nbrSujet+1;
    }

?>

</div>
<div class="col-12 formulaireL ">
<?php echo '<strong>Votre message : </strong>'.$_SESSION['message']; ?></div>
</div>


<?php 
// Affichage Session
//print_r($_SESSION);

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();
?>
</section>
<!-- Fin Section -->

<!-- Footer -->
<footer class="fixed-bottom myfooter text-center">
<p><a href="index.php">Hackers-Poulette Exercice</a></p> 

</footer>
<!-- Fin de Footer -->
<!-- https://pixabay.com/fr/photos/usb-technologie-ordinateur-1284227/-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>