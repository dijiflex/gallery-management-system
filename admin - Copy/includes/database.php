<?php
 
 require_once("new_config.php");
 class DATABASE
 {
     public $conn;
     
     public function __construct()
     {
         $this->open_db_connection();
     }
     public function open_db_connection()
     {
         $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
         if ($this->conn->connect_error) {
             die("Databse Connection Failed" .$this->conn->connect_error);
         }
     }
     //query data form the database
     public function query($sql)
     {
         $result = $this->conn->query($sql);
         $this->confirm_query($result);
         return $result;
     }

     private function confirm_query($result)
     {
         if (!$result) {
             die("Query Failed". $this->conn->error);
         }
     }

     public function escape_string($string)
     {
         $escped_string = $this->conn->real_escape_string($string);
         return $escped_string;
     }
     public function the_insert_id()
     {
         return $this->conn->insert_id;
     }
 }

 $database = new DATABASE();
