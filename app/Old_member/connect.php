<?php

    class Config_DB{

      private const DBHOST = "localhost"; 
  
      private const DBNAME = "crazydev_MRC_DB"; 
      private const DBUSER = "crazydev_Miracle1"; 
      private const DBPASS = "M$24r689c";     
      private $dsn = "mysql:host=".self::DBHOST."; dbname=".self::DBNAME.'';
     

      public function __construct(){
              
                try {
                  $conn = new PDO($this->dsn, self::DBUSER, self::DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));                 
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $this->db = $conn;    
                
                }                                
                catch(PDOException $e) {
                    echo "Error to Connect:".$e->getMessage();

                }
                
           }    
           
           
          
        

    }        




?>