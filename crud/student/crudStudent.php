<?php


// La connexion à la Datat Base
require_once('../../model/data.php');
$pdo = (new DataAccess)->access();


$stmt = $dbh->prepare("SELECT * FROM personne WHERE email = :email AND password = :password");

$stmt->execute([':email' => $_POST['email'], ':password' => $_POST['password']]);

$user = stmt->fetch();

echo json_encode([

    'status' => 'ok',

    'content' => $user,

]);

function recherchePersonne(): Personne
{
    $login = "Kenworthy.Ráo@hainaut-promsoc.be";
    $pass = "8PItAB";

    global $pdo;
    $sql = "SELECT * FROM personne WHERE EMAIL = ? and PASSWORD = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, strip_tags($login), PDO::PARAM_STR);
    $stmt->bindValue(2, strip_tags($pass), PDO::PARAM_STR);
    $stmt->execute();
    $exist = $stmt->fetchAll();

    if(!empty($exist)){
        foreach($p as $exists)
        $personne = new Personne();
        $personne->ID_personne = $exist.ID_personne;
        $personne->ID_SECTION = $exist.ID_SECTION;
        $personne->ID_STATUT = $exist.ID_STATUT;
        $personne->NOM = $exist.NOM;
        $personne->PRENOM = $exist.PRENOM;
        $personne->DDN = $exist.DDN;
        $personne->TELEPHONE = $exist.TELEPHONE;
        $personne->EMAIL = $exist.EMAIL;
        $personne->ADRESSE = $exist.ADRESSE;
    }
    return $personne;
}

function verifExist($login, $pass)
{
    $staff = rechercheStudent($login, $pass);
    $staffVerif = $staff->rowCount();
    if ($staffVerif == 1)
        return true;
    else
        return false;
}

// créer
function creatStudent($fisrt_name, $last_name, $email, $phone, $adresse, $ddn, $login, $pass, $role_id)
{
    global $pdo;
    $sql = "INSERT INTO ietc_test.student VALUE(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $fisrt_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $phone, PDO::PARAM_INT);
    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
    $stmt->bindValue(7, $login, PDO::PARAM_STR);
    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
    $stmt->bindValue(9, $role_id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// effacer
function deleteStudent($id)
{
    global $pdo;
    $sql = "DELETE FROM ietc_test.student WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
    $pdo = null;
}

// modifier
//function updateStudent($id, $fisrt_name, $last_name, $email, $phone, $adresse, $ddn, $login, $pass, $role_id)
//{
//    global $pdo;
//    $sql = "UPDATE ietc_test.student
//            SET first_name=?, last_name=?, email= ?,
//                phone=?, adress=?, ddn=?, login=?,
//                pass=?, role_id=?
//            WHERE id=?";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindValue(1, $fisrt_name, PDO::PARAM_STR);
//    $stmt->bindValue(2, $last_name, PDO::PARAM_STR);
//    $stmt->bindValue(3, $email, PDO::PARAM_STR);
//    $stmt->bindValue(4, $phone, PDO::PARAM_INT);
//    $stmt->bindValue(5, $adresse, PDO::PARAM_STR);
//    $stmt->bindValue(6, $ddn, PDO::PARAM_STR);
//    $stmt->bindValue(7, $login, PDO::PARAM_STR);
//    $stmt->bindValue(8, $pass, PDO::PARAM_STR);
//    $stmt->bindValue(9, $role_id, PDO::PARAM_INT);
//    $stmt->bindValue(10, $id, PDO::PARAM_INT);
//    return $stmt->execute();
//    $pdo = null;
//}

// voir un
function getStudent($id)
{
    global $pdo;
    $sql = "SELECT * FROM ietc_test.student WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
    $pdo = null;
}

// voir tout
function getAllStudent()
{
    global $pdo;
    $sql = "SELECT * FROM ietc_test.student";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $pdo = null;
}

?>
