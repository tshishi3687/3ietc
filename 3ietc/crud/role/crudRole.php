<?php
//require ('data.php');

// La connexion à la Datat Base
    $pdo = new PDO('mysql:host=localhost;
    dbname=ietc_test',
        'root',
        '');




// créer un role
function creatRole($name){
    global $pdo;
    $sql = "INSERT INTO role VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;
}

// effacer
function deleteRole($id){
    global $pdo;
    $sql = "DELETE FROM role WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier
function updateRole($id, $name){
    global $pdo;
    $sql = "UPDATE role SET role_name=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// voir un
function getRole($id){
    global $pdo;
    $sql = "SELECT * FROM role WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout
function getAllRole(){
    global $pdo;
    $sql = "SELECT * FROM role";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}