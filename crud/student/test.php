<?php
require_once 'studentController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<?php
echo '<pre>';
print_r(recherchePersonne());
echo '</pre>';
?>
<!--<div class="container">-->
<!--    <h1>Gestion du student</h1>-->
<!--</div>-->
<!--<form action="#" method="post" class="form-inline">-->
<!--    <input type="hidden" name="studentAction" value="creat">-->
<!--    <input type="text" name="nom" class="form-control" placeholder="Nom" >-->
<!--    <input type="text" name="prenom" class="form-control" placeholder="Prenom" >-->
<!--    <input type="email" name="email" class="form-control" placeholder="Email" >-->
<!--    <input type="number" name="phone" class="form-control" placeholder="Phone" >-->
<!--    <input type="text" name="adresse" class="form-control" placeholder="Adress" >-->
<!--    <input type="date" name="ddn" class="form-control" placeholder="Ddn" >-->
<!--    <input type="text" name="login" class="form-control" placeholder="Login" >-->
<!--    <input type="password" name="pass" class="form-control" placeholder="Login" >-->
<!--    <input type="number" name="section_id" class="form-control" placeholder="SectionID" >-->
<!--    <button class="btn btn-success">Ajouter</button>-->
<!--</form>-->
<!--<br>-->
<!--<table class="table table-striped">-->
<!--    <tr>-->
<!--        <th>Id</th>-->
<!--        <th>nom</th>-->
<!--        <th>prenom</th>-->
<!--        <th>email</th>-->
<!--        <th>adresse</th>-->
<!--        <th>ddn</th>-->
<!--        <th>login</th>-->
<!--        <th>section</th>-->
<!--    </tr>-->
<!--    --><?php
//    $student = getAllStudent();
//    foreach ($student as $r) :?>
<!--        <tr>-->
<!--            <td>--><?//= $r->id ?><!--</td>-->
<!--            <td>--><?//= $r->first_name ?><!--</td>-->
<!--            <td>--><?//= $r->last_name ?><!--</td>-->
<!--            <td>--><?//= $r->email ?><!--</td>-->
<!--            <td>--><?//= $r->adresse ?><!--</td>-->
<!--            <td>--><?//= $r->ddn ?><!--</td>-->
<!--            <td>--><?//= $r->login ?><!--</td>-->
<!--            <td>--><?//= $r->section_id ?><!--</td>-->
<!--            <td>-->
<!--                <a href="?studentAction=delete&id=--><?//= $r->id ?><!--" class="btn btn-danger">-->
<!--                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>-->
<!--                </a>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->
</body>
</html>
