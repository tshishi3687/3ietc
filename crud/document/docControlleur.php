<?php
require_once 'crudDoc.php';


$docAction = isset($_POST['docAction']) ? $_POST['docAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($docAction){


    case 'edit':
        $id = $_POST['id'];
        $role = getDoc($id);

        break;

    case 'creat':
        $nom = $_POST['doc'];
        if (is_string($nom)) creatDoc($nom);
        else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        updateDoc($id,$nom);
        break;
    case 'delete':
        $id = $_POST['id'];
        deleteDoc($id);
        break;
    default: echo "";

}
