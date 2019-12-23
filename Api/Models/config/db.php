<?php

class bd{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $url = $_SERVER["HTTP_HOST"];

        if ($url == 'localhost:8080') {
            $this->host     = 'localhost';
            $this->db       = 'eal_matrimonio';
            $this->user     = 'root';
            $this->password = "";
            $this->charset  = 'utf8_general_ci';
        } else {
            $this->host     = 'localhost';
            $this->db       = 'rxpjfcmy_ramirezmunoz';
            $this->user     = 'rxpjfcmy_ramirez';
            $this->password = "Enalgunlugar1*";
            $this->charset  = 'utf8_general_ci';
        }
    }

    //mysql -e "USE todolistdb; select*from todolist" --user=azure --password=6#vWHD_$ --port=49175 --bind-address=52.176.6.0

    function connect(){
        try{
            $mysqlConnect = "mysql:host=$this->host;dbname=$this->db";
            $dbConnecion = new PDO($mysqlConnect, $this->user, $this->password);
            $dbConnecion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbConnecion;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}






?>