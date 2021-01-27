<?php


function getStudent($id)
{
    global $pdo;
    $sql = "SELECT * FROM ietc_test.student WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}
