<?php
session_start();
//connexion à la BDD
require_once("connexionBDD.php");

$sql = "SELECT * FROM `textes`";

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC); //stocker result dans tableau assoc

//var_dump($result);

require_once('deconnexionBDD.php');
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
          <tbody>
            <?php
            // ------------- 2) afficher infos table----------->                      
            foreach ($result as $produit) {  // afficher infos
              // à ce niveau possible de faire un echo en php, (ici html)
            ?>
              <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['slogan'] ?></td>
                <td><?= $produit['infosCard'] ?></td>
                <td><?= $produit['titreCarousel'] ?></td>
                <td><a href="detailsTextes.php?id=<?= $produit['id'] ?>">détails</a>
                  <a href="modifierTextes.php?id=<?= $produit['id'] ?>">modifier</a>
                  <a href="supprimerTextes.php?id=<?= $produit['id'] ?>">supprimer</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <a href="ajouterTextes.php" class="btn btn-success">Ajouter un texte</a>
        <a href="accueilAdministrateur.php">retour</a>
        <a href="deconnexionBDD.php"> -- déconnexion --></a>
      </section>
    </div>
</main>
    </body>

</html>


