<?php
  if(!defined("__CONFIG__")){
    exit("Permission needed to access this file");
  }

  class DB{
    protected static $con;
    private function __construct(){

      try{

        self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=8888;dbname=login-system', 'admin', '9MHOtSopt9x7RoSn' );
        self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//uncomment on production sites
        self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
      } catch(PDOExpression $e){
        exit("could not connect to database");
      }
    }

    public static function getConnection(){
      if(!self::$con){
        new DB();
      }
      return self::con;
    }
  }  
?>