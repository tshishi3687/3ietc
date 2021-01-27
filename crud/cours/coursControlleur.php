<?php
require_once 'crudCours.php';

$CoursAction = isset($_POST['CoursAction']) ? $_POST['CoursAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($CoursAction){
    case 'edit':
        $id = $_POST['id'];
        $role = getCours($id);

        break;

    case 'creat':
        $nom = $_POST['nom'];
        if (is_string($nom)) creatCours($nom);
        else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        updateCours($id,$nom);
        break;
    case 'delete':
        $id = $_POST['id'];
        deleteCours($id);
        break;
    default: echo "";

}
