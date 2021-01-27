<?php
class DataAccess{

    private function getUser(){
        return $user = "root";
    }

    private function getPass(){
        return $pass = '';
    }

    public function access(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=chttt', $this->getUser(), $this->getPass());
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            print "Connexion DB null : " . $e->getMessage() . "<br/>";
            die();
        }
    }

}


//class clsDatabase{
//    // db settingsprivate $host   = 'localhost';
//    private $user   = 'test';
//    private $dbname = 'test';
//    private $pass   = 'test1';
//
//    private $dbh;
//    private $error;
//
//    public function __construct(){
//        // Set DSN
//        $dsn = 'mysql: host=' . $this->host . ';dbname=' . $this->dbname;
//        // Set options
//        $options = array(
//            PDO::ATTR_PERSISTENT            => true,
//            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
//            PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES UTF8'
//        );
//
//
//        // Create a new PDO instanacetry
//        {
//            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
//
//    // Catch any errorscatch(PDOException $e){
//    $this->error = $e->getMessage();
//    echo $this->error;
//    exit;
//    }
//    }
//
//    public function query($query){
//        $this->stmt = $this->dbh->prepare($query);
//    }
//}

