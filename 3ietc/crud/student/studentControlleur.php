<?php
require_once 'crudStudent.php';


$StudentAction = isset($_GET['StudentAction']) ? $_GET['StudentAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($StudentAction){


    case 'edit':
        $id = $_GET['id'];
        $role = getStudent($id);

        break;

    case 'creat':
//        if (verifNom() && verifPrenom() && verifEmail()
//            && verifPhoto() && verifAdresse() && verifDdn()
//            && verifLogin() && verifPass() && verifSectionId()) {
            $first_name = $_GET['nom'];
            $last_name = $_GET['prenom'];
            $email = $_GET['email'];
            $photo = $_GET['photo'];
            $adresse = $_GET['adresse'];
            $ddn = $_GET['ddn'];
            $login = $_GET['login'];
            $pass = $_GET['pass'];
            $section_id = $_GET['sectionID'];

            creatStudent($first_name,$last_name,$email,$photo,$adresse,$ddn,$login,$pass,$section_id);
//        }
//        else echo "L'ajout d'un nouvel étudiant a échoué.";
        break;

    case 'update':
        $id = $_GET['id'];
        if (verifNom() && verifPrenom() && verifEmail()
            && verifPhoto() && verifAdresse() && verifDdn()
            && verifLogin() && verifPass() && verifSectionId()) {
            $first_name = $_GET['nom'];
            $last_name = $_GET['prenom'];
            $email = $_GET['email'];
            $photo = $_GET['photo'];
            $adresse = $_GET['adresse'];
            $ddn = $_GET['ddn'];
            $login = $_GET['login'];
            $pass = $_GET['pass'];
            $section_id = $_GET['sectionID'];

            updateStudent($id,$first_name,$last_name,$email,$photo,$adresse,$ddn,$login,$pass,$section_id);
        }
        else echo "La modification de l'étudiant avec l'id : " . $id ." a échouée.";
        break;

    case 'delete':
        $id = $_GET['id'];
        deleteStudent($id);
        break;

    default: echo "Demande refusée.";
}

// Vérification du nom
function verifNom()
{
    if (!empty($_GET('nom'))) {
        $first_name = $_GET['nom'];
        if (strlen($first_name) > 1) {
            if (strlen($first_name) <= 50) {
                return true;
            } else {
                echo 'le nom est trop grand.';
                return false;
            }
        } else {
            echo 'le nom est trop petit.';
            return false;
        }
    } else
        {
        echo 'la variable nom est vide.';
        return false;
    }
}

// Vérification du prénom
function verifPrenom(){
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

// Vérification de l'email
function verifEmail(){
    if (!empty($_GET['email'])){
        $email = $_GET['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            echo 'Cet email n est pas valide.';
            return false;
        }
    }else{
        echo 'Email vide.';
        return false;
    }
}

//Vérification de l'adresse
function verifAdresse(){
    if (!empty($_GET('adresse'))) {
        $adresse = $_GET['adresse'];
        if (strlen($adresse) > 1) {
            if (strlen($adresse) <= 250) {
                return true;
            } else {
                echo 'l adresse est trop grande.';
                return false;
            }
        } else {
            echo 'l adresse est trop petite.';
            return false;
        }
    } else {
        echo 'le champ adresse est vide.';
        return false;
    }
}

// Vérification de la date de naissance
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

// Vérification du login
function verifLogin(){
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

// Vérification du mot de passe
function verifPass(){
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

// Vérification de la section
function verifSectionId(){
    if (!empty($_GET('sectionId'))) {
        $roleId = $_GET['nom'];
        if (is_int($sectionId)) {
            if (!empty(getRole($sectionId))) {
                return true;
            } else {
                echo 'il n existe pas de section avec l id : ' . $sectionId;
                return false;
            }
        } else {
            echo 'le section_id doit est de type Integer';
            return false;
        }
    } else {
        echo 'la variable sectionId est vide.';
        return false;
    }
}