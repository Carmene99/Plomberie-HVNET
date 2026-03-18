<?php

$host="localhost";
$username="root";
$password="";
$dbname="hvnet_plomberie";


try {
   $conn=new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connexion etablie a la base de donnee";
   
} catch (PDOException $e) {
   echo "Erreur de connexion ";
}


?>