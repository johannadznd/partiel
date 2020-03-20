<?php
require_once '../function/pdo.php';

$pdo = getPdo();

$query = "INSERT INTO newsletter (email) VALUES (:email)";

$stmt = $pdo->prepare($query);

return $stmt->execute([
'email' => $email
]);

echo ($insert) ? "Insertion OK" : "Insertion échouée";
