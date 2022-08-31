<?php
session_start();

if ($_POST) {
    if (isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['telephone']) && !empty($_POST['telephone'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['commentaire']) && !empty($_POST['commentaire'])
        && isset($_POST['autorisation']) && !empty($_POST['autorisation'])
    ) {

        $db = new PDO("mysql:host=localhost;dbname=randolibre;charset=utf8", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('INSERT INTO formulaire (nom, prenom, telephone, email, commentaire, autorisation) 
        VALUES(:nom, :prenom, :telephone, :email, :commentaire, :autorisation)');

        $query->bindParam(':nom', $_POST['nom']);
        $query->bindParam(':prenom', $_POST['prenom']);
        $query->bindParam(':telephone', $_POST['telephone']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':commentaire', $_POST['commentaire']);
        $query->bindParam(':autorisation', $_POST['autorisation']);

        $query->execute();

        function valid_donnees($donnees)
        {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }

        $nom = valid_donnees($_POST['nom']);
        $prenom = valid_donnees($_POST['prenom']);
        $telephone = valid_donnees($_POST['telephone']);
        $email = valid_donnees($_POST['email']);
        $commentaire = valid_donnees($_POST['commentaire']);
        $autorisation = valid_donnees($_POST['autorisation']);
 
        $_SESSION['message'] = "Entrée ajoutée avec succès!";
        
                header('Location:traitement.php');
 
    }

}
