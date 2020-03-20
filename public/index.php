<?php

require_once '../view/layout/header.php';
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Newsletter</h1>
    <p class="lead">Si vous voulez recevoir des newsletter n'hésitez pas à mettre votre email ci-dessous</p>
  </div>
</div>
<?php
require '../fonction/utilisateur.php';

if (!empty($_POST) && !empty($_POST['email'])) {
  $email = $_POST['email'];

insertNewsletter($email);

}
?>

<footer>
<h3>Inscription à la newsletter</h3>
<form method="POST" action="/">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email...">
  </div>
  <button type="submit" class="btn btn-dark">Enregistrer</button>
</form>

<?php require_once '../view/layout/footer.php';
