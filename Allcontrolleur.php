<?php

switch ($_POST){
    case 'ajouterRequest':
        $staff_id = $_POST['staffID'];
        $student_id = $_POST['studentID'];
        $cours_id = $_POST['coursID'];
        $status_id = $_POST['statusID'];
        $document_id = $_POST['documentID'];

        creatRequest($staff_id, $student_id, $cours_id, $status_id, $document_id);
        require_once 'test.php';

}