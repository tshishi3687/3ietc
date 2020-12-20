<?php
require_once 'requestControlleur.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Title</title>
</head>
<body>
<div class="container">
    <h1>Gestion du request</h1>
</div>
<form action="#" method="post" class="form-inline">
    <input type="hidden" name="RequestAction" value="creat">
    <input type="number" name="staffID" class="form-control" placeholder="StaffID" >
    <input type="number" name="studentID" class="form-control" placeholder="StudentID" >
    <input type="number" name="coursID" class="form-control" placeholder="CoursID" >
    <input type="number" name="statusID" class="form-control" placeholder="StatusID" >
    <input type="number" name="documentID" class="form-control" placeholder="DocumentID" >
    <button type="submit" class="btn btn-success" name="ajouterRequest">Ajouter</button>
</form>
<br>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>request date</th>
        <th>date decision</th>
        <th>staff ID</th>
        <th>student ID</th>
        <th>cours ID</th>
        <th>status ID</th>
        <th>document ID</th>
    </tr>
    <?php
    $request = getAllRequest();
    foreach ($request as $r) :?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->request_date?></td>
            <td><?= $r->date_decision ?></td>
            <td><?= $r->staff_id ?></td>
            <td><?= $r->student_id ?></td>
            <td><?= $r->cours_id ?></td>
            <td><?= $r->status_id ?></td>
            <td><?= $r->document_id ?></td>
            <td>
                <a  href="?RequestAction=delete&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>