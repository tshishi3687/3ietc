<?php
require_once 'CrudDemand.php';

if(isset($_POST['ajouterRequest'])){
    $staff_id = $_POST['staffID'];
    $student_id = $_POST['studentID'];
    $cours_id = $_POST['coursID'];
    $status_id = $_POST['statusID'];
    $document_id = $_POST['documentID'];

    creatRequest($staff_id, $student_id, $cours_id, $status_id, $document_id);
    require_once 'test.php';
}

$RequestAction = isset($_POST['RequestAction']) ? $_POST['RequestAction'] : '';

switch ($RequestAction){
    case 'creat':




        break;
    case 'update':
//        $id = $_GET['id'];
//        if (vefrifNom() && vefrifPrenom() && verifEmail()
//            && verifPhone() && verifAdresse() && verifDdn()
//            && vefrifLogin() && vefrifPass() && vefrifRoleId()) {
            $id = $_POST['id'];
            $status_id = $_POST['statusID'];

            updateRequest($id,$status_id);
//        }
//        else echo "La modification du staff avec l'id : " . $id ." a échoué.";
        break;
    case 'delete':
        $id = $_POST['id'];
        deleteRequest($id);
        break;
    default: echo "";

}
// je verifie si la variable nom n'est pas vide et si elle a la bonne longueur
function vefrifNom(){
    if (!empty($_GET('nom'))) {
        $fisrt_name = $_GET['nom'];
        if (strlen($fisrt_name) > 1) {
            if (strlen($fisrt_name) <= 50) {
                return true;
            } else {
                echo 'le nom est trop grand.';
                return false;
            }
        } else {
            echo 'le nom est trop petit.';
            return false;
        }
    } else {
        echo 'la variable nom est vide.';
        return false;
    }
}

// je verifie si la variable prenom n'est pas vide et si elle a la bonne longueur
function vefrifPrenom(){
    if (!empty($_GET('prenom'))){
        $last_name = $_GET['prenom'];
        if (strlen($last_name)>1){
            if (strlen($last_name)<=50){
                return true;
            }else{
                echo 'le prenom est trop grand.';
                return false;
            }
        }else {
            echo 'le prenom est trop petit.';
            return false;
        }
    }else {
        echo 'la variable prenom est vide.';
        return false;
    }
}

// je verifie si la variable email n'est pas vide et si elle est conform à un type mail
function verifEmail(){
    if (!empty($_GET['email'])){
        $email = $_GET['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            echo 'email pas valide.';
            return false;
        }
    }else{
        echo 'le email est vide.';
        return false;
    }
}

// je verifie si la varialble phone n'est pas vide et ça taille
function verifPhone(){
    if (!empty($_GET['email'])){
        $phone = $_GET['phone'];
        if (strlen($phone)>9 && strlen($phone)<15){
            return true;
        }else{
            echo 'la variable phone entrée n est pas valable.';
            return false;
        }
    }else{
        echo 'la variable phone est vide.';
        return false;
    }
}

// je verifie si la variable adresse n'est pas vide et ça longueur
function verifAdresse(){
    if (!empty($_GET('adresse'))) {
        $adresse = $_GET['adresse'];
        if (strlen($adresse) > 1) {
            if (strlen($adresse) <= 250) {
                return true;
            } else {
                echo 'l adresse est trop grand.';
                return false;
            }
        } else {
            echo 'l adress est trop petit.';
            return false;
        }
    } else {
        echo 'la variable adresse est vide.';
        return false;
    }
}

// je verifie si la variable ddn n'est pas vide et si elle est conform à un type date
function verifDdn(){
    if (!empty($_GET['ddn'])){
        $ddn = $_GET['ddn'];
        if (checkdate($ddn)){
            return true;
        }else{
            echo 'date pas valide.';
            return false;
        }
    }else{
        echo 'la date est vide.';
        return false;
    }
}

// je verifie si la variable login n'est pas vide et si elle a la bonne longueur
function vefrifLogin(){
    if (!empty($_GET('login'))) {
        $login = $_GET['login'];
        if (strlen($login) >= 4) {
            if (strlen($login) <= 50) {
                return true;
            } else {
                echo 'le login est trop grand.';
                return false;
            }
        } else {
            echo 'le login est trop petit.';
            return false;
        }
    } else {
        echo 'la variable login est vide.';
        return false;
    }
}

// je verifie si la variable pass n'est pas vide et si elle a la bonne longueur
function vefrifPass(){
    if (!empty($_GET('pass'))) {
        $pass = $_GET['nom'];
        if (strlen($pass) > 4) {
            if (strlen($pass) <= 50) {
                return true;
            } else {
                echo 'le pass est trop grand.';
                return false;
            }
        } else {
            echo 'le pass est trop petit.';
            return false;
        }
    } else {
        echo 'la variable pass est vide.';
        return false;
    }
}

// je verifie si la variable roleId n'est pas vide et si elle existe
function vefrifRoleId(){
    if (!empty($_GET('roleId'))) {
        $roleId = $_GET['nom'];
        if (is_int($roleId)) {
            if (!empty(getRole($roleId))) {
                return true;
            } else {
                echo 'il n existe pas de role avec l id : ' . $roleId;
                return false;
            }
        } else {
            echo 'le role_id doit est de type Integer';
            return false;
        }
    } else {
        echo 'la variable roleId est vide.';
        return false;
    }
}
