<?php

require_once '../../fonction/utils.php';


session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
} else {
  redirection('/login.php');
}


require_once '../../view/layout/header.php'; 
require_once '../../fonction/utilisateur.php';

$newsletters = getNewsletter();

foreach($newsletters as $newsletter){
    require '../../view/utilisateur/affiche_newsletter.php';
}
require_once '../../view/layout/footer.php';