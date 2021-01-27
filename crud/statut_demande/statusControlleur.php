<?php
require_once 'crudStatus.php';


$RoleAction = isset($_GET['RoleAction']) ? $_GET['RoleAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($RoleAction){


    case 'edit':
        $id = $_GET['id'];
        $role = getStatus($id);

        break;

    case 'creat':
        $nom = $_GET['nom'];
        if (is_string($nom)) creatStatus($nom);
        else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
        $id = $_GET['id'];
        $nom = $_GET['nom'];
        updateStatus($id,$nom);
        break;
    case 'delete':
        $id = $_GET['id'];
        deleteStatus($id);
        break;
    default: echo "";

}
