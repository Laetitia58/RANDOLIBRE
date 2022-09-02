<?php
session_start();
//connexion à la BDD
require_once("connexionBDD.php");

$sql = "SELECT * FROM `users`";

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC); //stocker result dans tableau assoc

//var_dump($result);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="backOfficeAdmin.css" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Espace administrateur: Gestion des données+ gestion des données-> administrateurs</title>

</head>

<body id="bodyAdmin">

  <section id="containerAdmin">

    <h1>Bienvenue
         <?php echo $_SESSION['username']; ?>!
    </h1>
    <p>Vous êtes dans votre espace administrateur</p>
    <article id="articleAdmin">

    <div class="gestionCat">
        <h2><a href="../backOffice/add.php">Gestion du formulaire</a>
          <h2>
      </div>

      <div class="gestionCat">
        <h2><a href="#gestionUtilisateurs">Gestion des utilisateurs</a>
          <h2>
      </div>

      <div class="gestionCat">
        <h2><a href="gestionTextesAdmin.php">Gestion des textes</a>
          <h2>
      </div>

      <div class="gestionCat">
        <h2><a href="gestionPhotosAdmin.php"> Gestion des photos</a>
          <h2>
      </div>
    </article>
  </section>


  <main class="containerAdmin">
    <!--utilisateurs-->
    <div id="gestionUtilisateurs" class="row">
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
        <h2 id="GU">Gestion des utilisateurs</h2>
        <table class="table">
          <thead>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
          </thead>
          <tbody>
            <?php
            // ------------- 2) afficher infos table----------->                      
            foreach ($result as $produit) {  // afficher infos
              // à ce niveau possible de faire un echo en php, (ici html)
            ?>
              <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['username'] ?></td>
                <td><?= $produit['email'] ?></td>
                <td><?= $produit['password'] ?></td>
                <td><a href="detailsAdmin.php?id=<?= $produit['id'] ?>">détails</a>
                  <a href="modifier.php?id=<?= $produit['id'] ?>">modifier</a>
                  <a href="supprimer.php?id=<?= $produit['id'] ?>">supprimer</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <a href="ajouter.php" class="btn btn-success">Ajouter un utilisateur</a>
        <a href="deconnexionBDD.php"> -- déconnexion --></a>
      </section>
    </div>

  </main>



</body>

</html>