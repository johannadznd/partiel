<?php 

require_once '../../fonction/utils.php';


session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
} else {
    redirection('/login.php');
}


require_once '../../view/layout/header.php'; 
require_once '../../fonction/utilisateur.php';

?>

<h3><a href="/admin/créer_utilisateur.php">Ajouter utilisateur</a></h3>

<?php

$utilisateurs = getUtilisateur();

foreach($utilisateurs as $utilisateur){
    require '../../view/utilisateur/affiche_utilisateur.php';
}
require_once '../../view/layout/footer.php';