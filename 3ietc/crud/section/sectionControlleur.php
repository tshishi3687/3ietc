<?php
require_once 'crudSection.php';


$SectionAction = isset($_GET['SectionAction']) ? $_GET['SectionAction'] : '';

$section = (object)['id'=> -1, 'section_name' => ''];

switch ($SectionAction){


    case 'edit':
            $id = $_GET['id'];
            $section = getSection($id);

        break;

    case 'creat':
            $nom = $_GET['nom'];
            if (is_string($nom)) creatSection($nom);
            else echo "L'ajout d'une nouvelle section a échoué.";
        break;
    case 'update':
            $id = $_GET['id'];
            $nom = $_GET['nom'];
            updateSection($id,$nom);
        break;
    case 'delete':
            $id = $_GET['id'];
            deleteSection($id);
        break;
    default: echo "Demande refusée.";

}
