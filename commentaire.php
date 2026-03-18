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

if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
// Préparation de la requête avec des marqueurs de paramètres.
    $requete = $conn->prepare("INSERT INTO commentaire VALUES (0, :nom, :email, :message)");
// Exécution de la requête avec les valeurs fournies dans un tableau associatif.
    $requete->execute(
        array(
               "nom"=> $nom,
               "email"=> $email,
               "message"=> $message
            
             )
        );

// récupérer le résultat d'une requête SQL sous la forme d'un tableau associatif.
        // $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($reponse);
        echo "Commentaire poster";

}


   
?>