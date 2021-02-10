<?php
class DataAccess{
    public function access(){
        try {
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=ietc_test', $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            print "Connexion DB null : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}




