<?php
class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    // private $db_host = '127.0.0.1';
    // private $db_name = 'php_auth_api';
    // private $db_username = 'root';
    // private $db_password = 'root';

    private $db_host = 'ec2-54-225-228-142.compute-1.amazonaws.com';
    private $db_name = 'dbcegtpq85mf8g';
    private $db_username = 'twttkpljuduyqu';
    private $db_password = '4c8a769c2b0905d2c24fe81bfb8e88ea909c1b84b37304825b6032c8749cf324';
    
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('pgsql:host='.$this->db_host.';port=5432;dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}

?>