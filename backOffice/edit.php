<?php
session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['telephone']) && !empty($_POST['telephone'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['commentaire']) && !empty($_POST['commentaire'])
    && isset($_POST['autorisation']) && !empty($_POST['autorisation'])){

        require_once('connect.php');

       // si tous les champs sont complets:connexion BDD,
        // 1)proteger les differents champs du formulaire:nettoyer les données envoyées
        $id = strip_tags($_POST['id']);
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $telephone = strip_tags($_POST['telephone']);
        $email = strip_tags($_POST['email']);
        $commentaire = strip_tags($_POST['commentaire']);
        $autorisation = strip_tags($_POST['autorisation']);

        // requete d'insertion (possible prepare de suite, cest au choix...)
        $sql = 'UPDATE `formulaire` SET `nom`=:nom, `prenom`=:prenom, `telephone`=:telephone, `email`=:email, `commentaire`=:commentaire, `autorisation`=:autorisation WHERE `id`=:id;';

        $query =$db->prepare($sql);   

        $query->bindValue(':id', $id , PDO::PARAM_INT);
        $query->bindValue(':nom', $nom , PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom , PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone , PDO::PARAM_STR);
        $query->bindValue(':email', $email , PDO::PARAM_STR);
        $query->bindValue(':commentaire', $commentaire , PDO::PARAM_STR);
        $query->bindValue(':autorisation', $autorisation , PDO::PARAM_STR);

        $query->execute(); 

        $_SESSION['message'] = "Entrée modifiée avec succès!";
        require_once('close.php');

        header('Location:index.php');     // fonctionne SSI pas de message AVANT, ni de echo etc...            
    }else{
            $_SESSION['erreur'] = "Veuillez remplir tous les champs";
        }
      }

if (isset($_GET['id']) && !empty($_GET['id'])) {    // id existe et pas vide? dans url

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

    // id N existe PAS et EST vide dans url
} else {
    $_SESSION['erreur'] = "URL invalide";
    header('Location:index.php');
}

/* poster des infos:test
if($_POST){
    die("ca marche!");
}
*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une entrée</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo "<div class='alert alert-danger' role='alert'>
                                ".$_SESSION['erreur']."
                               </div>";
                               $_SESSION['erreur']="";
                    }
                ?>
                <h1>Modifier une entrée</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input class="form-control" type="text" id="nom" name="nom" value="<?= $produit['nom'] ?>">
                    </div>
                        <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input class="form-control" type="text" id="prenom" name="prenom" value="<?= $produit['prenom'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="telephone">téléphone</label>
                        <input class="form-control" type="tel" id="telephone" name="telephone" value="<?= $produit['telephone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input class="form-control" type="email" id="email" name="email" value="<?= $produit['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="commentaire">commentaire</label>
                        <input class="form-control" type="text" id="commentaire" name="commentaire" value="<?= $produit['commentaire'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="autorisation">autorisation</label>
                        <input class="form-control" type="text" id="autorisation" name="autorisation" value="<?= $produit['autorisation'] ?>">
                    </div>
                    <input type="hidden" value="<?= $produit['id'] ?>" name="id">
                    <button class="btn btn-success">Valider</button>
                </form>
            </section>
        </div>
    </main>
    
</body>
</html>