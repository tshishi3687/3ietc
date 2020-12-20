<?php


// La connexion à la Datat Base
$pdo = new PDO('mysql:host=localhost;
    dbname=ietc_test',
    'root',
    '');

// création cours
function creatCours($name)
{
    global $pdo;
    $sql = "INSERT INTO cours VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;
}

// supprimer cours
function deleteCous($id)
{
    global $pdo;
    $sql = "DELETE FROM rours WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

function updateCous($id, $name)
{
    global $pdo;
    $sql = "UPDATE cours SET cours_name=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

function getCours($id)
{
    global $pdo;
    $sql = "SELECT * FROM cours WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

function getAllCours()
{
    global $pdo;
    $sql = "SELECT * FROM cours";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}