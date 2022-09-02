<?php
session_start();
//connexion à la BDD
require_once("connect.php");

$sql = "SELECT * FROM `formulaire`";

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC); //stocker result dans tableau assoc

//var_dump($result);

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des données du formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
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
                <h1>Gestion des données du formulaire</h1>
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>telephone</th>
                        <th>email</th>
                        <th>commentaire</th>
                        <th>autorisation</th>
                        <th>actions</th>
                    </thead>
                    <tbody>
                        <?php
                        // ------------- 2) afficher infos table----------->                      
                        foreach ($result as $produit) {  // afficher infos
                            // à ce niveau possible de faire un echo en php, (ici html)
                        ?>
                            <tr>
                                <td><?= $produit['id'] ?></td>
                                <td><?= $produit['nom'] ?></td>
                                <td><?= $produit['prenom'] ?></td>
                                <td><?= $produit['telephone'] ?></td>
                                <td><?= $produit['email'] ?></td>
                                <td><?= $produit['commentaire'] ?></td>
                                <td><?= $produit['autorisation'] ?></td>
                                <td><a href="details.php?id=<?= $produit['id'] ?>">détails</a>
                                    <a href="edit.php?id=<?= $produit['id'] ?>">modifier</a>
                                    <a href="delete.php?id=<?= $produit['id'] ?>">supprimer</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn btn-success">Ajouter une entrée</a>
                <a href="../backofficeadmin/accueilAdministrateur.php">retour</a>
            </section>
        </div>
    </main>
</body>

</html>