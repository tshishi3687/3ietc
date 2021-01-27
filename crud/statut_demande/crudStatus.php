<?php

// La connexion à la Datat Base
require_once('../../model/data.php');


$pdo = (new DataAccess)->access();


// créer un role
//function creatStatusDemande($nom_statut_demande){
//    global $pdo;
//    $sql = "INSERT INTO statut_demande VALUE(NULL, ?)";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $nom_statut_demande, PDO::PARAM_STR);
//    return $stmt->execute();
//    $pdo = null;
//}
//
//// effacer
//function deleteStatutDemande($id_statut_demande){
//    global $pdo;
//    $sql = "DELETE FROM statut_demande WHERE ID_STA_DEMAND=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $id_statut_demande, PDO::PARAM_INT);
//    return $stmt->execute();
//    $pdo = null;
//}
//
//// modifier
//function updateStatutDemande($id_statut_demande, $nom_statut_demande){
//    global $pdo;
//    $sql = "UPDATE statut_demande SET NOMSTATDEMAND=? WHERE ID_STA_DEMAND=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $nom_statut_demande, PDO::PARAM_STR);
//    $stmt->bindValue(2, $id_statut_demande, PDO::PARAM_INT);
//    return $stmt->execute();
//    $pdo = null;
//}
//
// voir un
function getStatutDemande($id_statut_demande){
    global $pdo;
    $sql = "SELECT * FROM statut_demande WHERE ID_STA_DEMAND=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_statut_demande]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout
function getAllStatutDemande(){
    global $pdo;
    $sql = "SELECT * FROM statut_demande";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}

