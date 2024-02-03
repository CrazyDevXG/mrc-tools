<?php

    class Config_DB{

      private const DBHOST = "localhost";   
      private const PORTHOST = "3306";
      private const DBNAME = "crazydev_MRC_DB"; 
      private const DBUSER = "crazydev_Miracle"; 
      private const DBPASS = "MR@x689cd";      
      private $dsn = "mysql:host=".self::DBHOST."; port=".self::PORTHOST."; dbname=".self::DBNAME.'';
      protected $conn = null;

      public function __construct(){
              
                try {
                  $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));                 
                  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                
                }                                
                catch(PDOException $e) {
                    echo "Error to Connect:".$e->getMessage();

                }
                
           }    
           
           
          
        

    }        




?>