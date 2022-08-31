<!------1 seul produit------->
<?php
session_start();

if (isset($_GET['id']) && !empty($_GET['id'])){//id existe et pas vide? dans url

// id existe dans BDD
    require_once('connect.php');

$id = strip_tags($_GET['id']);

$sql = 'SELECT * FROM `formulaire` WHERE `id`= :id;';

$query = $db->prepare($sql);

$query->bindValue(":id", $id, PDO::PARAM_INT);

$query->execute();

$produit = $query->fetch();


// id N' existe PAS dans BDD  
    if (!$produit) {
        $_SESSION['erreur'] = "cet id n'existe pas";
        header("Location:index.php");
    }

// id N existe PAS dans url
} else {
    $_SESSION['erreur'] = "URL invalide";
    header('Location:index.php');
}
?>

<!----afficher les détails en html--->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'entrée</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1>Détails de l'entrée <?= $produit['nom'] ?></h1>
                <p>id: <?= $produit['id'] ?></p>
                <p>nom: <?= $produit['nom'] ?></p>
                <p>prenom: <?= $produit['prenom'] ?></p>
                <p>telephone: <?= $produit['telephone'] ?></p>
                <p>email: <?= $produit['email'] ?></p>
                <p>commentaire: <?= $produit['commentaire'] ?></p>
                <p>autorisation: <?= $produit['autorisation'] ?></p>
                <p><a href="index.php">Retour</a>
                   <a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>
                </p>
            </section>
        </div>
    </main>
</body>

</html>