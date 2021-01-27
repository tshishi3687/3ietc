<?php
require_once 'cours/crudCours.php';

if ( isset( $POST['creatCours'] ) ) {
    $cours_name = $_POST['nom'];
    echo $cours_name;
}
