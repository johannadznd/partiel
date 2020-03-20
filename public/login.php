<?php 

require_once '../fonction/pdo.php';

$pdo = getPdo();

if (!empty($_POST['login']) && !empty($_POST['password'])) {
  session_start();
  $login = $_POST['login'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE login = $login";
  $stmt = $pdo->query($query);

  $connection = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($connection && password_verify($password, $connection['password'])) {
    $_SESSION['state'] = 'connected';
  }
}

require_once '../view/layout/header.php';
?>

<h1>Connexion</h1>
<h4>Identifiez-vous</h4>

<form method="POST">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login...">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe...">
  </div>
  <button type="submit" class="btn btn-dark">Connexion</button>
</form>

<?php
require_once '../view/layout/footer.php';