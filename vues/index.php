<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Initialisation MVC</title>
        <link rel="stylesheet" href="./assets/css/accueil.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <?php
        session_start();
        require_once 'modeles/PdoConnexion.php';
        require_once 'modeles/PdoUtilisateur.php';
        require_once 'modeles/PdoCategorie.php';
        include 'vues/v-nav.php';
        if (!isset($_REQUEST['uc'])){
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch($uc){
            case 'fonctionnalite_publique':
                include 'controleurs/ControleurPublic.php';
                break;
            case 'authentification':
                include 'controleurs/ControleurAuthentification.php';
                break;
            case 'utilisateur':
                include 'controleurs/ControleurUtilisateur.php';
                break;
            case 'veille':
                include 'controleurs/ControleurVeille.php';
                break;
            default:
                include 'vues/v-accueil.php';
                break;
        }
        ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
