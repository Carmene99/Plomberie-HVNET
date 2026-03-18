<?php

$host="localhost";
$dbname="hvnet_plomberie";
$user="root";
$password="";

try{

    $conn= new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $password);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // echo "connexion etablie avec succes";

} catch(PDOException $e ){
    echo "erreur de connexion a la base de donnee";
}
if(isset($_POST['ok'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $adresse = $_POST['adresse'];
  $ville = $_POST['ville'];
  $email = $_POST['email'];
  $typelocal = $_POST['typelocal'];
  $typeservice = $_POST['typeservice'];
  $sujet = $_POST['sujet'];
  $autre = $_POST['autre'];
  $message = $_POST['message'];
 
// Préparation de la requête avec des marqueurs de paramètres.
  $requete = $conn->prepare("INSERT INTO contact VALUES (0, :nom, :prenom, :telephone, :adresse, :ville, :email, :typelocal, :typeservice, :sujet, :autre, :message)");
// Exécution de la requête avec les valeurs fournies dans un tableau associatif.
  $requete->execute(
      array(
             "nom"=> $nom,
             "prenom"=> $prenom,
             "telephone"=> $telephone,
             "adresse"=> $adresse,
             "ville"=> $ville,
             "email"=> $email,
             "typelocal"=> $typelocal,
             "typeservice"=> $typeservice,
             "sujet"=> $sujet,
             "autre"=> $autre,
             "message"=> $message
          
           )
      );

// récupérer le résultat d'une requête SQL sous la forme d'un tableau associatif.
      // $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($reponse);
      echo "Votre message a été envoyé avec succès !";

}


?>

