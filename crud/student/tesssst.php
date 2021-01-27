<?php
$host = 'mysql:host=localhost;dbname=chttt';
$user = 'root';
$password = '';
$dbh = new PDO($host, $user, $password);


$stmt = $dbh->prepare("SELECT * FROM personne WHERE email = :email AND password = :password");

$stmt->execute([':email' => $_POST['email'], ':password' => $_POST['password']]);

$user = $stmt->fetch();

if (!$user) {
    exit(json_encode(['status' => 'error', 'content' => 'Email / mot de passe invalide']));
}
echo json_encode([

    'status' => 'ok',

    'content' => $user,

]);
