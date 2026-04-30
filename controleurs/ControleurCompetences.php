<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "ap":
        include 'vues/v-ap.php';
        break;
    case "certif":
        include 'vues/v-certif.php';
        break;
    case "stages" :
        include 'vues/v-stages.php';
        break;
    case "tab" :
        include 'vues/v-tableau.php';
        break;
}
?>
