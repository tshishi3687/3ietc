<?php

//// header requis
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Method: GET");
//header("Access-Control-Max-Age:3600");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../config/Data.php';
include_once '../model/Personne.php';
include_once '../model/Cours.php';
include_once '../model/Demande.php';
include_once '../model/Statut.php';
include_once '../model/Section.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];

require_once('../../model/data.php');
$pdo = (new DataAccess)->access();

    $requete = "SELECT * FROM personne 
    JOIN statut 
        ON personne.ID_STATUT = statut.ID_STATUT 
    WHERE personne.EMAIL = ? AND personne.PASSWORD = ?";
    $stmt = $pdo->prepare($requete);
    $stmt->bindValue(1, strip_tags($login), PDO::PARAM_STR);
    $stmt->bindValue(2, strip_tags($pass), PDO::PARAM_STR);
    $stmt->execute();
    $exist = $stmt->fetch();
//echo json_encode($exist);
        switch($exist['NOM_STATUT']){

            case "Etudiant":
                $sql = "SELECT demande.ID_DEMANDE, demande.DATE_DECISION, demande.COMMENTAIRE,cours.NOM_COURS, personne.ID_personne,
                personne.NOM,personne.PRENOM,personne.DDN, personne.TELEPHONE,personne.EMAIL, personne.ADRESSE, section.NOM_SECTION, statut.NOM_STATUT, cours.PREREQUISES,
                cours.CAPACITES_TERMINALES, statut_demande.NOMSTATDEMAND, demande.DATE_DEMANDE, demande.DATE_DECISION, demande.COMMENTAIRE, documents.ID_DOC, documents.NOM_DOC,
                documents.DOC, documents.TAILLE_DOC  FROM demande
                RIGHT JOIN personne
                on demande.ID_personne = personne.ID_personne
                LEFT JOIN statut
                ON personne.ID_STATUT = statut.ID_STATUT
                LEFT JOIN section
                ON personne.ID_SECTION = section.ID_SECTION
                LEFT JOIN cours
                ON demande.ID_COURS = cours.ID_COURS
                LEFT JOIN justifier
                ON demande.ID_DEMANDE = justifier.ID_DEMANDE
                LEFT JOIN documents
                on justifier.ID_DOC = documents.ID_DOC
                LEFT JOIN statut_demande
                ON demande.ID_STA_DEMAND = statut_demande.ID_STA_DEMAND
                WHERE personne.EMAIL = ? AND personne.PASSWORD = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, strip_tags($login), PDO::PARAM_STR);
                $stmt->bindValue(2, strip_tags($pass), PDO::PARAM_STR);
                $stmt->execute();
                $exist = $stmt->fetchAll();
                echo json_encode(((Object)$exist));
                break;
            case "Secretariat":
            case "Directeur":
                $requete = "SELECT * FROM demande";
                $stmt = $pdo->prepare($requete);
                $stmt->execute();
                $exist = $stmt->fetchAll();
                echo json_encode(((Object)$exist));
                break;
            default:
                    http_response_code(405);
                    echo json_encode(["message" => "la méthode n'est pas autorisé"]);
                }

