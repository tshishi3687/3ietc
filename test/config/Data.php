<?php
class Database{
    private $hos = "localhost";
    private $db_name = "chttt";
    private $user_name = "root";
    private $password = "";
    public $connexion;

    /**
     * @return mixed
     */
    public function getConnexion()
    {
        $this->connexion = null;

        try{
            $this->connexion = new PDO(
                "mysql:host=" . $this->hos . ";dbname=" . $this->db_name, $this->user_name, $this->password);
            $this->connexion->exec("set names utf8");
        }catch(PDOException $e){
            echo "error de connexion : " . $e->getMessage();
        }
        return $this->connexion;
    }
}
