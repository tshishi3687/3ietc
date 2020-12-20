<?php


// La connexion à la Datat Base
require_once('../../model/data.php');

class  CoursImpl implements Crud
{

    private DataAccess $pdo;

    /**
     * @return DataAccess
     */
    private function getPdo(): DataAccess
    {
        return (new DataAccess())->access();
    }


    public function creat(string $name)
    {
            $sql = "INSERT INTO cours VALUE(NULL, ?)";
            $stmt = $this->getPdo()->prepare($sql);
            $stmt->bindValue(1, $name, PDO::PARAM_STR);
            return $stmt->execute();
            $pdo = null;
    }

    public function readOne(int $id)
    {
        global $pdo;
        $sql = "SELECT * FROM cours WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
        $pdo = null;
    }

    public function readAll(string $tableName)
    {
        $sql = "SELECT * FROM cours";
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        $pdo = null;
    }

    public function update(int $id, string $name)
    {
        $sql = "UPDATE cours SET cours_name=? WHERE id=?";
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->bindValue(1, $name, PDO::PARAM_STR);
        $stmt->bindValue(2, $id, PDO::PARAM_INT);
        return $stmt->execute();
        $pdo = null;
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM rours WHERE id=?";
        $stmt = $this->getPdo()->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        return $stmt->execute();
        $pdo = null;
    }
}
$pdo = (new clsDatabase())->acce

// création cours
function creatCours($name)
{
    global $pdo;
    $sql = "INSERT INTO cours VALUE(NULL, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    return $stmt->execute();
    $pdo = null;
}

// supprimer cours
function deleteCous($id)
{
    global $pdo;

}

function updateCous($id, $name)
{
    global $pdo;

}

function getCours($id)
{
    global $pdo;
    $sql = "SELECT * FROM cours WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

function getAllCours()
{
    global $pdo;
    $sql = "SELECT * FROM cours";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}