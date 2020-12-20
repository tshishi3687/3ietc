<?php
require_once 'crudCours.php';

$CoursAction = isset($_GET['CoursAction']) ? $_GET['CoursAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($CoursAction){
    case 'edit':
        $id = $_GET['id'];
        $role = getCours($id);

        break;

    case 'creat':
        $nom = $_GET['nom'];
        if (is_string($nom)) creatCours($nom);
        else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
        $id = $_GET['id'];
        $nom = $_GET['nom'];
        updateCours($id,$nom);
        break;
    case 'delete':
        $id = $_GET['id'];
        deleteCours($id);
        break;
    default: echo "";

}
