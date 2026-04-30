<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action) {
    case "domitys":
        include 'vues/stages/v-domitys.php';
        break;
    case "certif":
        include 'vues/v-certif.php';
        break;
}
?>