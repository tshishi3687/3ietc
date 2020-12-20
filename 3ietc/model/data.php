<?php
//        try {
//            $user = "root";
//            $pass = "";
//            $pdo = new PDO('mysql:host=localhost;dbname=ietc_test', $user, $pass);
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            return $pdo;
//
//        } catch (PDOException $e) {
//            print "Erreur !: " . $e->getMessage() . "<br/>";
//            die();
//        }

    $user = "root";
    $pass = "";
    $pdo = new PDO('mysql:host=localhost;dbname=ietc_test', $user, $pass,[
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        POD::ATTR_ERRMODE=>POD::ERRMODE_EXCEPTION
    ]);

