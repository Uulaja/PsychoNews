<?php 

$sName = "localhost";
$uName = "if0_36720234";
$pass = "rTTaHhenWP7zPN";
$db_name = "if0_36720234_psychonews";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}