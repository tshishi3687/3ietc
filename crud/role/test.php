<?php
    require_once 'roleControlleur.php';
    require_once 'crudRole.php';
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
        <h1>Gestion des roles</h1>
    </div>
    <form action="#" method="get" class="form-check-inline">
        <input type="hidden" name="RoleAction" value="creat">
        <input type="text" name="nom" class="form-control" placeholder="Nom" >
        <button class="btn btn-success">Ajouter</button>
    </form>
    <br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Role</th>
        </tr>
        <?php
        $role = getAllRole();
        foreach ($role as $r) :?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->role_name ?></td>
            <td>
                <a href="?RoleAction=delete&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>