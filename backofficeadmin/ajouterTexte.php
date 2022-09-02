<?php
session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['slogan']) && !empty($_POST['slogan'])
    && isset($_POST['infosCard']) && !empty($_POST['infosCard'])
    && isset($_POST['titreCarousel']) && !empty($_POST['titreCarousel'])){

require_once('connexionBDD.php');

// si tous les champs sont complets:connexion BDD,
// 1)proteger les differents champs du formulaire:nettoyer les données envoyées

        $id = strip_tags($_POST['id']);
        $slogan = strip_tags($_POST['slogan']);
        $infosCard = strip_tags($_POST['infosCard']);
        $titreCarousel = strip_tags($_POST['titreCarousel']);

        // requete d'insertion (possible prepare de suite, cest au choix...)
        $sql = 'INSERT INTO `users` (`id`, `slogan`, `infosCard`, `titreCarousel`) 
        VALUES (:id, :slogan, :infosCard, :titreCarousel );';

        $query = $db->prepare($sql);
        
        $query->bindValue(':id', $id , PDO::PARAM_STR);
        $query->bindValue(':slogan', $slogan , PDO::PARAM_STR);
        $query->bindValue(':infosCard', $infosCard , PDO::PARAM_STR);
        $query->bindValue(':titreCarousel', $titreCarousel , PDO::PARAM_STR);

        $query->execute();

        
        $_SESSION['message'] = "Utilisateur ajouté avec succès!";
require_once('deconnexionBDD.php');

        header('Location:accueilAdministrateur.php');     // fonctionne SSI pas de message AVANT, ni de echo etc...            
    }else{
            $_SESSION['erreur'] = "Veuillez remplir tous les champs";
        }
      }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="backOfficeAdmin.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Espace administrateur: Gestion des données -> TEXTES</title>

</head>

<body id="body">

<main class="containerAdmin">
<div id="gestionTextes" class="row">
      <section class="col-12">
        <!-----si erreur---->
        <?php
        if (!empty($_SESSION['erreur'])) {
          echo "<div class='alert alert-danger' role='alert'>
                                " . $_SESSION["erreur"] . "
                               </div>";
          $_SESSION['erreur'] = "";
        }
        ?>
        <?php
        if (!empty($_SESSION['message'])) {
          echo "<div class='alert alert-success' role='alert'>
                                " . $_SESSION["message"] . "
                               </div>";
          $_SESSION['message'] = "";
        }
        ?>
        <h2 id="GT">Gestion des textes</h2>
        <table class="table">
          <thead>
            <th>id</th>
            <th>slogan</th>
            <th>infos cards</th>
            <th>titre carousel</th>
          </thead>

<a href="detailsTextes.php?id=id'] ?>">détails</a>
                  <a href="modifierTextes.php?id=id'] ?>">modifier</a>
                  <a href="supprimerTextes.php?id=id'] ?>">supprimer</a>
 

        </table>
        <a href="ajouterTexte.php" class="btn btn-success">Ajouter un texte</a>
        <a href="accueilAdministrateur.php">retour</a>
        <a href="deconnexionBDD.php"> -- déconnexion --></a>
      </section>
    </div>
</main>
    </body>

</html>


