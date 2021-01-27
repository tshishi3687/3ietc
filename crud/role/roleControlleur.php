<?php
require_once 'crudRole.php';


$RoleAction = isset($_POST['RoleAction']) ? $_POST['RoleAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($RoleAction){


    case 'edit':
            $id = $_POST['id'];
            $role = getRole($id);

        break;

    case 'creat':
            $nom = $_POST['nom'];
            if (is_string($nom)) creatRole($nom);
            else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            updateRole($id,$nom);
        break;
    case 'delete':
            $id = $_POST['id'];
            deleteRole($id);
        break;
    default: echo "";

}
