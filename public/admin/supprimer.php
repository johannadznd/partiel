
<?php

require_once '../../fonction/utils.php';


session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
} else {
    redirection('/login.php');
}


require_once '../../fonction/utilisateur.php';
$ID = $_GET['ID'];

$supprimer = supprimer($ID);