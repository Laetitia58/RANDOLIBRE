<?php
session_start();

if ($_POST) {
    if (isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['type']) && !empty($_POST['type'])
        && isset($_POST['password']) && !empty($_POST['password'])
    ) {

        $db = new PDO("mysql:host=localhost;dbname=randolibre;charset=utf8", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('INSERT INTO users (username, email, type, password ) 
        VALUES(:username, :email, :type, :password )');

        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':type', $_POST['type']);
        $query->bindParam(':password', $_POST['password']);

        $query->execute();

        function valid_donnees($donnees)
        {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }

        $username = valid_donnees($_POST['username']);
        $email = valid_donnees($_POST['email']);
        $query->bindParam(':type', $_POST['type']);
        $password = valid_donnees($_POST['password']);
 
        $_SESSION['message'] = "Inscription validée !";
        
                header('Location:traitementUsers.php');
 
 
 
    }




}
