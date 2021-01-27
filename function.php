<?php

function allStudent(){
    $student = getAllStudent();
    foreach ($student as $r) :?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->first_name ?></td>
            <td><?= $r->last_name ?></td>
            <td><?= $r->email ?></td>
            <td><?= $r->adresse ?></td>
            <td><?= $r->ddn ?></td>
            <td><?= $r->login ?></td>
            <td><?= $r->section_id ?></td>
            <td>
                <a href="?Action=deleteStudent&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
    <?php endforeach;
}
function allstaff(){
    $staff = getAllStaff();
    foreach ($staff as $r) :?>
        <tr>
            <td><?= $r->id ?></td>
            <td><?= $r->first_name ?></td>
            <td><?= $r->last_name ?></td>
            <td><?= $r->email ?></td>
            <td><?= $r->phone ?></td>
            <td><?= $r->adresse ?></td>
            <td><?= $r->ddn ?></td>
            <td><?= $r->login ?></td>
            <td><?= $r->role_id ?></td>
            <td>
                <a href="?Action=deleteStaff&id=<?= $r->id ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-minus-sign">supprimer</span>
                </a>
            </td>
        </tr>
    <?php endforeach;
}