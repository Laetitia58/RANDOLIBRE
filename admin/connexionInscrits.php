
<?php
session_start();
if(isset($_POST['submit'])){
  if(!empty($_POST['username']) AND !empty($_POST['password'])){
    $pseudo_par_defaut = "test";
    $password_par_defaut = "test1";

    $pseudo_saisi = htmlspecialchars($_POST['username']);
    $password_saisi = htmlspecialchars($_POST['password']);

    if($pseudo_saisi == $pseudo_par_defaut AND $password_saisi == $password_par_defaut){
      $_SESSION['password'] = $password_saisi;
      header('Location:../backofficeadmin/accueilAdministrateur.php');
    }else{
      echo "Votre passe ou pseudo est incorrect";
    }
  }else{
    echo "veuillez compléter tous les champs";
  }

  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./admin.css">
  <title>connexion des inscrits front end: les administrateurs</title>
</head>

<body id="body">

  <form class="box" action="" method="POST" name="login">
    <h1 class="box-logo box-title"></h1>
    <h1 class="box-title">Connexion</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
   <div id="car"> 
    <img id="voiture" src="../images/voiture.png">
    <input id="confirmer" type="button" name="buttonVoiture" value="confirmer" class="box-button" />
    <input type="submit" value="Connexion " name="submit" class="box-button">
      <a href="../rando.php">Retour au site</a>
   </div>
  </form>

  <script src="inscription.js" defer></script>
</body>

</html>

