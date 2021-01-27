<?php
require_once 'docControlleur.php';
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
print_r(getAllDocument(25));
echo '</pre>';
?>
<!--<div class="container">-->
<!--    <h1>Gestion des documents</h1>-->
<!--</div>-->
<!--<form action="#" method="post" class="form-check-inline">-->
<!--    <input type="hidden" name="docAction" value="creat">-->
<!--    <input type="file" name="doc" class="form-control" placeholder="Documents" >-->
<!--    <button class="btn btn-success">Ajouter</button>-->
<!--</form>-->
<!--<br>-->
<!--<table class="table table-striped">-->
<!--    <tr>-->
<!--        <th>Id</th>-->
<!--        <th>documennt</th>-->
<!--    </tr>-->
<!--    --><?php
//    $doc = getAllDoc();
//    foreach ($doc as $r) :?>
<!--        <tr>-->
<!--            <td>--><?//= $r->id ?><!--</td>-->
<!--            <td>--><?//= $r->document_name ?><!--</td>-->
<!--            <td><img src="--><?//= $r->document_name ?><!--"?id="--><?//= $r->id ?><!--" /></td>-->
<!--            <td>-->
<!--                <a href="?docAction=delete&id=--><?//= $r->id ?><!--" class="btn btn-danger">-->
<!--                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>-->
<!--                </a>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->
</body>
</html>
