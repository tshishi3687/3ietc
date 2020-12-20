<?php
require_once 'requestControlleur.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<div class="container">
    <h1>Gestion du staff</h1>
</div>
<form action="#" method="get" class="form-inline">
    <input type="hidden" name="RequestAction" value="creat">
    <input type="number" name="staffID" class="form-control" placeholder="StaffID" >
    <input type="number" name="studentID" class="form-control" placeholder="StudentID" >
    <input type="number" name="coursID" class="form-control" placeholder="CoursID" >
    <input type="number" name="statusId" class="form-control" placeholder="StatusID" >
    <input type="number" name="documentID" class="form-control" placeholder="DocumentID" >
    <button class="btn btn-success">Ajouter</button>
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
                <a href="?RquestAction=delete&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>