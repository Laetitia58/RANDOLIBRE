<?php
session_start();

if($_POST){
    if(isset($_POST['username']) && !empty($_POST['username'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['type']) && !empty($_POST['type'])
    && isset($_POST['password']) && !empty($_POST['password'])){

require_once('connexionBDD.php');

// si tous les champs sont complets:connexion BDD,
// 1)proteger les differents champs du formulaire:nettoyer les données envoyées

        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $type = strip_tags($_POST['type']);
        $password = strip_tags($_POST['password']);;

        // requete d'insertion (possible prepare de suite, cest au choix...)
        $sql = 'INSERT INTO `users` (`username`, `email`, `type`, `password``) 
        VALUES (:username, :email, :type, :password);';

        $query = $db->prepare($sql);
        
        $query->bindValue(':username', $username , PDO::PARAM_STR);
        $query->bindValue(':email', $email , PDO::PARAM_STR);
        $query->bindValue(':type', $type , PDO::PARAM_STR);
        $query->bindValue(':password', $password , PDO::PARAM_STR);

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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout et choix d'un utilisateur</title>
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
                <h1>Ajouter un utilisateur</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                        <div class="form-group">
                        <label for="email">email</label>
                        <input class="form-control" type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="type">type</label>
                        <input class="form-control" type="tel" id="type" name="type">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <button class="btn btn-success">Enregistrer</button> <button><a href="accueilAdministrateur.php">retour</a></button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>