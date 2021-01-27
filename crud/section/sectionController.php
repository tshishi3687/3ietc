<?php
require_once 'crudSection.php';


$SectionAction = isset($_POST['SectionAction']) ? $_POST['SectionAction'] : '';

$role = (object)['id'=> -1, 'role_name' => ''];

switch ($SectionAction){


    case 'edit':
        $id = $_POST['id'];
        $role = getSection($id);

        break;

    case 'creat':
        $nom = $_POST['nom'];
        if (is_string($nom)) creatSection($nom);
        else echo "L'ajoue nouveau role a échoué.";
        break;
    case 'update':
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        updateSection($id,$nom);
        break;
    case 'delete':
        $id = $_POST['id'];
        deleteSection($id);
        break;
    default: echo "";

}
