<?php
include('./databaseConnexion.php');


if(isset($_POST['nom'])&&
isset($_POST['prenom'])&&
isset($_POST['email'])&&
isset($_POST['mdp'])){
  $insertion = $conn->prepare('INSERT INTO inscription VALUES(NULL, :nom, :prenom, :email, :mdp)');
  $insertion->bindValue(':nom',$_POST['nom']);
  $insertion->bindValue(':prenom',$_POST['prenom']);
  $insertion->bindValue(':email',$_POST['email']);
  $insertion->bindValue(':mdp',$_POST['mdp']);
  $verification=$insertion->execute();
  if($verification){
        echo "Inscription reussie";
        header('Location: ./connexion.php');
  }else{
        echo "Echec d'inscription";
  }

}else{
  echo "Une variable n'est pas declaree et ou est null";
}

?>