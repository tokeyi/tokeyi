<?php
session_start();

class DB{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'ceremony_bd';
    public $db;

    public function __construct( $host = null , $username = null , $password = null ,
     $database = null ){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        try{
            //ici on fait la connexion à la Bdd
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,
             $this->username, 
            $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));

        }catch(PDOException $e){
            die('Impossible de se connecter à la Base des données');
        }
       
    }
    
    //Cette fonction nous permet de récupérer nos requêtes SQL proprement et les traiter
    public function query($sql, $data = array()){
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ); 
    } 



}