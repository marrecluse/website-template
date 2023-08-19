<?php

$servername="localhost";
$username="marrecluse";
$password="OccupyTheWeb@333";
$dbname="cutscript";

try{

    $pdo=new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){
    echo "Connection Failed: " .$e->getMessage();
    die();
}


?>