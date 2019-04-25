<?php 
class Dbh{
private $servername;
private $username;
private $password;
private $dbname;
private $charset;

public function connect(){
//hii
$this->servername = "localhost";
$this->username = "root";
$this->password = "";
$this->dbname = "sis";
$this->charset =  "utf8mb4";
try{
$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
$pdo = new PDO($dsn,$this->username, $this->password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;
}
catch(PDOException $e){
    echo "Connection Failed!".$e->getMessage();
}
}
}
?>
