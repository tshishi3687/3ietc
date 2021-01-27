<?php

// La connexion à la Datat Base
require_once('../../model/data.php');


$pdo = (new DataAccess)->access();


// créer un role
function creatSection($name){
    global $pdo;
    $sql = "INSERT INTO section VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;
}

// effacer
function deleteSection($id){
    global $pdo;
    $sql = "DELETE FROM section WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier
function updateSection($id, $name){
    global $pdo;
    $sql = "UPDATE section SET section_name=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// voir un
function getSection($id){
    global $pdo;
    $sql = "SELECT * FROM section WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout
function getAllSection(){
    global $pdo;
    $sql = "SELECT * FROM section";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}

