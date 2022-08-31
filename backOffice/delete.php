<!------READ lire 1 seul produit------->
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
        die();
    }

    $sql = 'DELETE FROM `formulaire` WHERE `id`= :id;';
    
    $query = $db->prepare($sql);
    
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    
    $query->execute();

    $_SESSION['message'] = "Entrée supprimée!";
    header("Location:index.php");



// id N existe PAS et EST vide? dans url
} else {
    $_SESSION['erreur'] = "URL invalide";
    header('Location:index.php');
}
