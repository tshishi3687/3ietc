<?php

// La connexion à la Datat Base
require_once('../../model/data.php');


$pdo = (new DataAccess)->access();

// créer un role
function creatStaff($fisrt_name, $last_name, $email, $phone, $adresse, $ddn, $login, $pass, $role_id){
    global $pdo;
    $sql = "INSERT INTO ietc_test.staff VALUE(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $fisrt_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $phone, PDO::PARAM_INT);
    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
    $stmt->bindValue(7, $login, PDO::PARAM_STR);
    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
    $stmt->bindValue(9, $role_id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// effacer
function deleteStaff($id){
    global $pdo;
    $sql = "DELETE FROM ietc_test.staff WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier
function updateStaff($id,$fisrt_name, $last_name, $email, $phone, $adresse, $ddn, $login, $pass, $role_id){
    global $pdo;
    $sql = "UPDATE ietc_test.staff 
            SET first_name=?, last_name=? email=?,
                phone=?, adress=?, ddn=?, login=?,
                pass=?, role_id=?
            WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $fisrt_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $phone, PDO::PARAM_INT);
    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
    $stmt->bindValue(7, $login, PDO::PARAM_STR);
    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
    $stmt->bindValue(9, $role_id, PDO::PARAM_INT);
    $stmt->bindValue(10, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// voir un
function getStaff($id){
    global $pdo;
    $sql = "SELECT * FROM ietc_test.staff WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout
function getAllStaff(){
    global $pdo;
    $sql = "SELECT * FROM ietc_test.staff";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}