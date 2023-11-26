<?php 
try {
//HOST
define("HOSTNAME","localhost:3307");
//dbname
define("DBNAME","homeland");
//user
define("USER","root");
//password
define("PASS","");
$conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
     catch (PDOException $e) { 
    die("Database connection error: ".$e->getMessage());
}