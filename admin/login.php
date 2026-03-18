<?php
include('./databaseConnexion.php');


if(isset($_POST['email'])&&
isset($_POST['mdp'])){
  $insertion = $conn->prepare('INSERT INTO authentification VALUES(NULL, :email, :mdp)');
  $insertion->bindValue(':email',$_POST['email']);
  $insertion->bindValue(':mdp',$_POST['mdp']);
  $verification=$insertion->execute();
  if($verification){
        echo "Authentification reussie";
        header('Location: ./index.php');
  }else{
        echo "Echec d'authentification";
  }

}else{
  echo "Une variable n'est pas declaree et ou est null";
}

?>