
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $utilisateur['login']; ?></h5>
    <p class="card-text"> ID : <?php echo $utilisateur['ID']; ?></p>
    <p class="card-text"> Email : <?php echo $utilisateur['email']; ?></p>
    <p class="card-text"> Rôle : <?php echo $utilisateur['roles']; ?></p>
    <p class="card-text"> Active : <?php echo $utilisateur['active']; ?></p>
    <a href="/admin/modifier.php?id=<?php echo $utilisateur['ID'];?>"> Modifier </a>
    <a href="/admin/supprimer.php?id=<?php echo $utilisateur['ID'];?>">Supprimer</a>
  </div>
</div>