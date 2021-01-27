<?php

// La connexion à la Datat Base
require_once('../../model/data.php');


$pdo = (new DataAccess)->access();


// créer
function createDocument($nom_doc){
    global $pdo;
    $sql = "INSERT INTO documents VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $nom_doc, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;

    return null;
}
//
//// effacer
//function deleteDocument($id_doc){
//    global $pdo;
//    $sql = "DELETE FROM documents WHERE ID_DOC=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $id_doc, PDO::PARAM_INT);
//    return $stmt->execute();
//    $pdo = null;
//}
//
//// modifier
//function updateDocument($id_doc, $nom_doc, $taille_doc, $doc){
//    global $pdo;
//    $sql = "UPDATE documents SET NOM_DOC=?, TAILLE_DOC=?, DOC=? WHERE ID_DOC=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $nom_doc, PDO::PARAM_STR);
//    $stmt->bindValue(2, $taille_doc, PDO::PARAM_INT);
//    $stmt->bindValue(3, $doc, PDO::PARAM_INT);
//    $stmt->bindValue(4, $id_doc, PDO::PARAM_INT);
//    return $stmt->execute();
//    $pdo = null;
//}

//// voir un
//function getDocument($id_doc){
//    global $pdo;
//    $sql = "SELECT * FROM documents WHERE ID_DOC=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$id_doc]);
//    $stmt->fetch(PDO::FETCH_OBJ);
//    return $stmt[0][document_name];
//    $pdo = null;
//}

// voir tout
function getAllDocument(int $id_demande){
    global $pdo;
    $sql = "SELECT * FROM documents 
                    JOIN justifier
                    ON documents.ID_DOC = justifier.ID_DOC
                    JOIN demande 
                    ON justifier.ID_DEMANDE = demande.ID_DEMANDE
             WHERE demande.ID_DEMANDE =?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1,$id_demande, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}

//permet de verifier si le fichier est une images/PDF/-5mb et retourne un nouveau nom
//public function verifichier($data){
//    $file_size =$data['size'];
//    $file_ext_end= explode('.',$data['name']);
//    $file_ext= strtolower(end($file_ext_end));
//    //$extensions= array("PDF","JPG","PNG","JPEG","pdf","doc");
//    $extensions= ['jpg','png','jepg','pdf'];
//    //On compare l'extension du fichier avec notre source
//    if(in_array($file_ext,$extensions)==false){
//        return $errors=array("extension incorrecte JPG,PNG,PDF sont autorisé");
//    }else{
//        //on continue la verification
//        //On verifier le taille du fichier sur une limite de 5 mo (5097152)
//        if($file_size >= 5097152){
//            return $errors=array(' la taille du fichier doit être moins que 5 MB ');
//        }else{
//            //extension pour renomé
//            $random= $this->randonombre();
//            //cette modification permet d'enlever les espace dans les noms de fichier et les remplace par _
//            $fullname = $random.'_'.str_replace(" ", "_",$data['name']);
//            return $fullname;
//        }
//    }
//}
