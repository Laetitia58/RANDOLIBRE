<?php
session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['username']) && !empty($_POST['username'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])){

        require_once('connexionBDD.php');

       // si tous les champs sont complets:connexion BDD,
        // 1)proteger les differents champs du formulaire:nettoyer les données envoyées
        $id = strip_tags($_POST['id']);
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        // requete d'insertion (possible prepare de suite, cest au choix...)
        $sql = 'UPDATE `users` SET `username`=:username, `email`=:email, `password`=:password WHERE `id`=:id;';

        $query =$db->prepare($sql);   

        $query->bindValue(':id', $id , PDO::PARAM_INT);
        $query->bindValue(':username', $username , PDO::PARAM_STR);
        $query->bindValue(':email', $email , PDO::PARAM_STR);
        $query->bindValue(':password', $password , PDO::PARAM_STR);

        $query->execute(); 

        $_SESSION['message'] = "Utilisateur modifié avec succès!";
        require_once('deconnexionBDD.php');

        header('Location:accueilAdministrateur.php');     // fonctionne SSI pas de message AVANT, ni de echo etc...            
    }else{
            $_SESSION['erreur'] = "Veuillez remplir tous les champs";
        }
      }

if (isset($_GET['id']) && !empty($_GET['id'])) {    // id existe et pas vide? dans url

    // id existe dans BDD
    require_once('connexionBDD.php');

    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM `users` WHERE `id`= :id;';

    $query = $db->prepare($sql);

    $query->bindValue(":id", $id, PDO::PARAM_INT);

    $query->execute();

    $produit = $query->fetch();


    // id N' existe PAS dans BDD  
    if (!$produit) {
        $_SESSION['erreur'] = "cet id n'existe pas";
        header("Location:accueilAdministrateur.php");
    }

    // id N existe PAS et EST vide dans url
} else {
    $_SESSION['erreur'] = "URL invalide";
    header('Location:accueilAdministrateur.php');
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
                        <label for="username">username</label>
                        <input class="form-control" type="text" id="username" name="username" value="<?= $produit['username'] ?>">
                    </div>
                        <div class="form-group">
                        <label for="email">email</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?= $produit['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input class="form-control" type="password" id="password" name="password" value="<?= $produit['password'] ?>">
                    </div>
                 
                    <input type="hidden" value="<?= $produit['id'] ?>" name="id">
                    <button class="btn btn-success">Valider</button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>

