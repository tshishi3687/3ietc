<?php

// La connexion à la Datat Base
require_once('../../model/data.php');
require_once('../../crud/document/crudDoc.php');


$pdo = (new DataAccess)->access();

// créer un reqest
function creatDemande($id_personne, $ID_COURS, $com){ /* Rachid  foreach*/
    global $pdo;
    $request_date = date('Y/m/d');
    $sql = "INSERT INTO demande VALUE(NULL, ?, NULL, ?, ?, NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id_personne, PDO::PARAM_INT);
    $stmt->bindValue(2, $ID_COURS, PDO::PARAM_INT);
    $stmt->bindValue(3, $request_date, PDO::PARAM_STR);
    $stmt->bindValue(4, $com, PDO::PARAM_INT);
    try {
        return $stmt->execute();
    }catch (PDOException $e){
        echo 'Error';
    }
    $id_demande = LastinsertID;
    creatJustifier($id_demande, $document_id);
}

// effacer
function deleteDemande($id_demande){
    global $pdo;
    $sql = "DELETE FROM demande WHERE ID_DEMANDE=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id_demande, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier
function updateDemande($id_demande,$id_sta_demande){
    global $pdo;
    $sql = "UPDATE demande SET ID_STA_DEMAND = ? WHERE ID_DEMANDE=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id_demande, PDO::PARAM_INT);
    $stmt->bindValue(2, $id_sta_demande, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// voir un
function getDemande($id_demande){
    global $pdo;
    $sql = "SELECT * FROM demande WHERE ID_DEMANDE=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_demande]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout par personne
function getAllDemandeParPersonne($id_personne){
    global $pdo;
    $sql = "SELECT * FROM demande WHERE ID_personne = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id_personne, PDO::PARAM_INT );
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
// Voir tout
function getAllDemande(){
    global $pdo;
    $sql = "SELECT * FROM demande";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}


//permet de verifier si le fichier est une images/PDF/-5mb et retourne un nouveau nom
public function verifichier($data){
    $file_size =$data['size'];
    $file_ext_end= explode('.',$data['name']);
    $file_ext= strtolower(end($file_ext_end));
    //$extensions= array("PDF","JPG","PNG","JPEG","pdf","doc");
    $extensions= ['jpg','png','jepg','pdf'];
    //On compare l'extension du fichier avec notre source
    if(in_array($file_ext,$extensions)==false){
        return $errors=array("extension incorrecte JPG,PNG,PDF sont autorisé");
    }else{
        //on continue la verification
        //On verifier le taille du fichier sur une limite de 5 mo (5097152)
        if($file_size >= 5097152){
            return $errors=array(' la taille du fichier doit être moins que 5 MB ');
        }else{
            //extension pour renomé
            $random= $this->randonombre();
            //cette modification permet d'enlever les espace dans les noms de fichier et les remplace par _
            $fullname = $random.'_'.str_replace(" ", "_",$data['name']);
            return $fullname;
        }
    }
}
