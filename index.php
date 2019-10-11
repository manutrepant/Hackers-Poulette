<?php

// Pas défaut aucune valeur
$checkPrenom ="";
$checkNom ="";
$checkEmail ="";
$checkMessage ="";
$checkSujet ="";

// Valeur par défaut
$valeurPrenom ="";
$valeurNom ="";
$valeurMessage ="";
$valeurEmail="";
$valeurSujet="";

// Couleur erreur
$checkColor="red";




if (isset($_POST['envoye']) && !empty($_POST['envoye']))
    {
        
        // Si formulaire rempli je démarre une session
        session_start ();

        //prenom
        if (empty($_POST['prenom']))
        {
        $checkPrenom="Encoder votre prénom SVP !";
        }

        //nom
        if (empty($_POST['nom']))
        {
        $checkNom="Encoder votre nom SVP !";
        }

        //email
        if (empty($_POST['email']))
        {
        $checkEmail="Encoder votre email SVP !";
        }

        //message
        if (empty($_POST['message']))
        {
        $checkMessage="Encoder votre message SVP !";
        }

        //message
        if (empty($_POST['sujet']))
        {
        $checkSujet="Cocher votre sujet SVP !";
        }
        // ----------------------------------------------------------------

        // Si donnée Prenom
        if (!empty($_POST['prenom']))
        {
        $valeurPrenom=htmlspecialchars($_POST['prenom']);

        $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
        }

        // Si donnée Nom
        if (!empty($_POST['nom']))
        {
            $valeurNom=htmlspecialchars($_POST['nom']);      
            $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
        }

        // Si donnée Message
        if (!empty($_POST['message']))
        {
            $valeurMessage=htmlspecialchars($_POST['message']);      
            $_SESSION['message'] = htmlspecialchars($_POST['message']);
        }


        // check box
        if(isset($_POST['submit']))
        
        {//to run PHP script on submit
            if(!empty($_POST['sujet']))
            
            {
        
        // Loop to store and display values of individual checked checkbox.
            $checked_count = count($_POST['sujet']);
            foreach($_POST['sujet'] as $selected)
                {
                    echo $selected."</br>";
                }
            }
        }
        // fin check box

        // Si donnée Email et le reste
        if (!empty($_POST['email']))
        {      
            $valeurEmail=htmlspecialchars($_POST['email']);      
            $_SESSION['email'] = htmlspecialchars($_POST['email']);

            $valeurGenre=htmlspecialchars($_POST['genre']); 
            $valeurPays=htmlspecialchars($_POST['pays']); 
            $_SESSION['genre'] = htmlspecialchars($_POST['genre']);
            $_SESSION['pays'] = htmlspecialchars($_POST['pays']);
            
            /*$checked_count = count($_POST['sujet']);
            foreach($_POST['sujet'] as $selected) {
                echo $selected;
                }*/

            $_SESSION['sujet'] = $_POST['sujet'];


        }

// Quand TRUE - Données
if ($valeurNom==true && $valeurPrenom==true && $valeurEmail==true && $valeurMessage==true) 
    {
        echo "TRUE<br>";
        print_r($_SESSION);
// -------------------------------------------------------------

        header('Location:email-envoye.php');
    }

// False
else echo "";
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Hackers Poulette</title>
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
<h1>Nous contacter !</h1>
</header>
<!-- Fin Header -->
<!-- Formulaire -->
<!-- $url -->
<form method="post" action="">
<main>
<!-- Section -->
<section>
<div class="row">
<!-- col-576 / col-sm >= 576 / col-md >= 768  -->

<!-- DIV 1 -->
<div class="col-12 col-sm-6 col-md-6">
<div class="row-12"><hr>
<label for="Entrer votre prénom" class="w-100 p-2">Entrer votre prénom : <?php echo "<p class='".$checkColor."'>".$checkPrenom."</p>" ?> </label>
<input title="Entrer votre prénom" type="text" name="prenom" placeholder="Entrer votre prénom" size="30" maxlength="30" autofocus <?php echo 'value="'.$valeurPrenom.'"'; ?> >
</div>

<div class="row-12"><hr>
<label for="Entrer votre nom de famille" class="w-100 p-2">Entrer votre nom de famille : <?php echo "<p class='".$checkColor."'>".$checkNom."</p>" ?></label>
<input title="Entrer votre nom de famille" type="text" name="nom" placeholder="Entrer votre nom de famille" size="30" maxlength="30" <?php echo 'value="'.$valeurNom.'"'; ?>>
</div>

<div class="row-12"><hr>
<label for="Entrer votre adresse email" class="w-100 p-2">Entrer votre adresse email : <?php echo "<p class='".$checkColor."'>".$checkEmail."</p>" ?></label>
<input title="Entrer votre adresse email" type="text" name="email" placeholder="Entrer votre adresse email" autocomplete="on" size="30" maxlength="30" <?php echo 'value="'.$valeurEmail.'"'; ?>>
</div>

<div class="row-12"><hr>
<label for="Choisisser votre genre" class="w-100 p-2">Choisisser votre genre :</label>
<input title="Homme" type="radio" name="genre" value="homme" checked>De sexe masculin
<input title="Femme"type="radio" name="genre" value="femme">De sexe féminin
<input title="Autre"type="radio" name="genre" value="autre">Autre
</div>

<div class="row-12"><hr>
<label for="Choisisser votre pays" class="w-100 p-2">Choisisser votre pays :</label>
<select name="pays" title="Sélectionner votre pays" >
<option selected value="Belgique">Belgique</option>
<option value="France">France</option>
<option value="Autre">Autre</option>
</select>
</div>

<div class="row-12"><hr>
<label for="Choisisser votre sujet" class="w-100 p-2">Choisisser votre sujet :  <?php echo "<p class='".$checkColor."'>".$checkSujet."</p>" ?></label>
<input title="Question générale" type="checkbox" name="sujet[]" value="<strong>Question générale</strong>">Question générale
<input title="Aide technique" type="checkbox" name="sujet[]" value="<strong>Aide technique</strong>">Aide technique
<input title="Service après vente" type="checkbox" name="sujet[]" value="<strong>Service après vente</strong>" >Service après vente
</div>

<!-- END DIV 1-->   
</div>

<!-- DIV 2 -->

<div class="col-12 col-sm-6 col-md-6 ">
<div class="horizontal"><img src="images/hackers-poulette-logo.png" alt="Logo du site : Hackers Poulette"></div>

<!-- DIV 3-->
<div class="col-12 col-sm-12 col-md-12"><hr>

<div>
<label for="Ecrire votre message" class="w-100 p-2">Ecrire votre message : <?php echo "<p class='".$checkColor."'>".$checkMessage."</p>" ?></label>
<!-- <textarea title="Ecrire votre message" name="message" rows="10" placeholder="Mon message"  <?php echo 'value="'.$valeurMessage.'"'; ?>  > </textarea> -->

<textarea title="Ecrire votre message" name="message" rows="10">
<?php 

// Permet de voir le voir le message dans un text area
if (isset($_POST['envoye'])) 
{ echo htmlspecialchars($_POST['message']);} ?>
</textarea>

</div>                                                   
<!-- Bouton-->
<div>
<button name="envoye" value="envoye" title="Envoyer votre message" type="submit">Envoyer votre message</button>
<!-- <input name="envoye" type="submit" value="Envoyer votre message"    > -->
</div>           
</div>
<!-- END DIV 3-->

</div>   
</div>

<!-- END DIV 2 -->  
</main>
</form>
<!-- FIN Formulaire -->
</section>
<!-- Fin Section -->
<!-- Footer -->
<footer class="fixed-bottom myfooter text-center">
<p><a href="index.php">Hackers-Poulette Exercice</a></p> 

</footer>
<!-- Fin de Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
