<?php 
require_once '../view/layout/header.php';
require_once '../fonction/utilisateur.php';


if (!empty($_POST) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
  insertUtilisateur($login, $email, $password);
  
}
?>
<form method="POST">
  <div class="form-group">
    <label>Login</label>
    <input name="login" type="text" class="form-control">
  </div><div class="form-group">
    <label>Email</label>
    <input name="email" type="test" class="form-control" >
  </div>
  <div class="form-group">
    <label>Mot de passe</label>
    <input name="password" type="password" class="form-control">
  </div>
  <div class="form-group">
    <label>Confirmation du mot de passe</label>
    <input name="password2" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-dark">Enregister</button>
</form>

<?php require_once '../view/layout/footer.php'?>