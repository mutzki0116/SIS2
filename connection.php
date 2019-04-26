<?php 
// class dbconn{
// private $servername;
// private $username;
// private $password;
// private $dbname;
// private $charset;

// public function connect(){
//hii
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis";
try{
$dsn = "mysql:host=".$servername.";dbname=".$dbname;
$pdo = new PDO($dsn,$username, $password);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// return $pdo;
}
catch(PDOException $e){
    echo "Connection Failed!".$e->getMessage();
}
// }
// }
?>
