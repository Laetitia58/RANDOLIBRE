<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <title>Inscription front end</title>
</head>

<body id="body">

  <form class="box" method="post" action="recupDonneesInscrit.php" onsubmit="return confirmer();">
    <h1 class="box-title">S'inscrire</h1>
    <input id="name" name="username" type="text" class="box-input" placeholder="Nom d'utilisateur" required />

    <input id="leMail" name="email" type="text" class="box-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" required />

    <input id="mdp" name="password" type="password" class="box-input" placeholder="Mot de passe" required />

    <div id="valider">
      <img id="voiture" src="../images/voiture.png">
      <span><input id="confirmer" type="button" name="buttonVoiture" value="confirmer" class="box-button" /> &emsp;
      <input type="submit" name="sinscrire" class="submit-btn" value="s'incrire'">
      <button class="retour"><a href="../rando.php">retour au site</a></button>
      <button class="reset-btn" onclick="reset()">Reset</button>
    </div>


    <p class="box-register">Déjà inscrit? &nbsp; &nbsp; &nbsp;
      <a href="connexionInscrits.php">Connectez-vous ici</a>
    </p>
  </form>


  <script src="inscription.js" defer></script>
</body>

</html>