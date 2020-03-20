<?php 

require_once '../../fonction/utils.php';

session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
} else {
  redirection('/login.php');
}

require_once '../../view/layout/header.php';


if (!empty($_POST) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])&& !empty($_POST['active'] && !empty($_POST['roles']))) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $active = $_POST['active'];
    $roles = $_POST['roles'];
  
  insertUtilisateur($login, $email, $password,$active,$roles);
  
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

  <div class="form-group">
    <label >Rôles</label>
    <select class="form-control" name="roles">
      <option>User</option>
      <option>Admin</option>
    </select>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="active">
    <label class="form-check-label" >Active</label>
  </div>

  <button type="submit" class="btn btn-dark">Enregister</button>
</form>


<?php
require_once '../../view/layout/footer.php';