<?php
//require ('data.php');

// Connexion à la database
    $pdo = new PDO('mysql:host=localhost;
    dbname=ietc_test',
        'root',
        '');




// création d'une section
function creatSection($name){
    global $pdo;
    $sql = "INSERT INTO section VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;
}

// supprimer une section
function deleteSection($id){
    global $pdo;
    $sql = "DELETE FROM section WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// Modifier une section
function updateSection($id, $name){
    global $pdo;
    $sql = "UPDATE section SET section_name=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// Afficher une section
function getSection($id){
    global $pdo;
    $sql = "SELECT * FROM section WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// Afficher toutes les sections
function getAllSection(){
    global $pdo;
    $sql = "SELECT * FROM section";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}