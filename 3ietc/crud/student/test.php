<?php
require_once 'studentControlleur.php';
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
    <h1>Gestion des étudiants</h1>
</div>
<form action="#" method="get" class="form-inline">
    <input type="hidden" name="StudentAction" value="creat">
    <input type="text" name="nom" class="form-control" placeholder="Nom" >
    <input type="text" name="prenom" class="form-control" placeholder="Prenom" >
    <input type="email" name="email" class="form-control" placeholder="Email" >
    <input type="number" name="photo" class="form-control" placeholder="Photo" >
    <input type="text" name="adresse" class="form-control" placeholder="Adress" >
    <input type="date" name="ddn" class="form-control" placeholder="Ddn" >
    <input type="text" name="login" class="form-control" placeholder="Login" >
    <input type="password" name="pass" class="form-control" placeholder="Login" >
    <input type="number" name="sectionID" class="form-control" placeholder="SectionID" >
    <button class="btn btn-success">Ajouter</button>
</form>
<br>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>photo</th>
        <th>adresse</th>
        <th>ddn</th>
        <th>login</th>
        <th>section</th>
    </tr>
    <?php
    $student = getAllStudent();
    foreach ($student as $r) :?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->first_name ?></td>
            <td><?= $r->last_name ?></td>
            <td><?= $r->email ?></td>
            <td><?= $r->photo ?></td>
            <td><?= $r->adresse ?></td>
            <td><?= $r->ddn ?></td>
            <td><?= $r->login ?></td>
            <td><?= $r->section_id ?></td>
            <td>
                <a href="?StudentAction=delete&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>