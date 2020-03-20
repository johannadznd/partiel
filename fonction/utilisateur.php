<?php

require_once 'pdo.php';

function insertUtilisateur(string $login, string $email,string $password){
    $pdo = getPdo();

    $query = 'INSERT INTO users (login, email, password, active, roles) VALUES (:login, :email, :password, :active, :roles)';
    $stmt = $pdo->prepare($query);

    $insert = $stmt->execute([
        'login' =>$login,
        'email' =>$email ,
        'password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
        'active' => 1,
        'roles' => 'user' //Pour les rôles j'ai decider de prendre un varchar et de choisir user ou admin
    ]);

}


function insertNewsletter(string $email){
    $pdo = getPdo();

    $query = 'INSERT INTO newsletter (email) VALUES (:email)';
    $stmt = $pdo->prepare($query);

    $insert = $stmt->execute([
        'email' =>$email
    ]);

}

function getUtilisateur():array{

    $pdo = getPdo();

    $query = 'SELECT * FROM  users';

    $stmt = $pdo->query($query);
    
    $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $utilisateur;
}

function getNewsletter():array{

    $pdo = getPdo();

    $query = 'SELECT * FROM  newsletter';

    $stmt = $pdo->query($query);
    
    $newsletter = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $newsletter;
}


function insertAdmin(string $login, string $email,string $password,string $roles , int $active){
    $pdo = getPdo();

    $query = 'INSERT INTO users (login, email, password, active, roles) VALUES (:login, :email, :password, :active, :roles)';
    $stmt = $pdo->prepare($query);

    $insert = $stmt->execute([
        'login' =>$login,
        'email' =>$email ,
        'password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
        'active' =>$active,
        'roles' =>$roles 
    ]);

}

function modifier (string $login, string $email,string $password,string $roles , int $active)
{

    $pdo = getPdo();

    $query= "UPDATE users SET login=$login,password=$password,email=$email,roles=$roles,active=$active";

    $stmt = $pdo->query($query);
    
    $modifier = $stmt->fetchAll(PDO::FETCH_ASSOC);

}


function supprimer ($ID)
{

    $pdo = getPdo();

    $query= "DELETE FROM users WHERE ID ='$ID'";

    $stmt = $pdo->query($query);
    
    $supprimer = $stmt->fetchAll(PDO::FETCH_ASSOC);

}





