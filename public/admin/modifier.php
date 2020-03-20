<?php	

require_once '../../fonction/utils.php';


session_start();
if(isset($_SESSION['state']) && $_SESSION["state"] == "connected") {
} else {
    redirection('/login.php');
}


require_once '../../view/layout/header.php'; 
require_once '../../fonction/utilisateur.php';


if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])&& isset($_POST['active']) && isset($_POST['roles']))
{

  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $active = isset($_POST['active']) ? 1 : 0;
  $roles = $_POST['roles'];

  $modifier = modifier($login,$email,$password,$active,$roles);
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

