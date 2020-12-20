<?php

// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;
    dbname=ietc_test',
    'root',
    '');

// création d'un étudiant
function creatStudent($first_name, $last_name, $email, $photo, $adresse, $ddn, $login, $pass, $section_id)
{
    global $pdo;
    $sql = "INSERT INTO ietc_test.student VALUE(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $first_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $photo, PDO::PARAM_INT);
    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
    $stmt->bindValue(7, $login, PDO::PARAM_STR);
    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
    $stmt->bindValue(9, $section_id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// supprimer un étudiant
function deleteStudent($id)
{
    global $pdo;
    $sql = "DELETE FROM ietc_test.student WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier un étudiant
function updateStudent($id,$first_name, $last_name, $email, $photo, $adresse, $ddn, $login, $pass, $section_id)
{
    global $pdo;
    $sql = "UPDATE ietc_test.student 
            SET first_name=?, last_name=? email=?,
                photo=?, adresse=?, ddn=?, login=?,
                pass=?, section_id=?
            WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $first_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $photo, PDO::PARAM_INT);
    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
    $stmt->bindValue(7, $login, PDO::PARAM_STR);
    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
    $stmt->bindValue(9, $section_id, PDO::PARAM_INT);
    $stmt->bindValue(10, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// éditer un étudiant
function getStudent($id){
    global $pdo;
    $sql = "SELECT * FROM ietc_test.student WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// afficher tous les étudiants
function getAllStudent(){
    global $pdo;
    $sql = "SELECT * FROM ietc_test.student";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}