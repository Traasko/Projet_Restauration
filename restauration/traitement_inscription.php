<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$mdp=md5($_POST['mdp']);

try{
$bdd= new PDO('mysql:host=localhost;dbname=projet_restauration;charset=utf8','root','');
}
catch(Exception $e)
{
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('INSERT into user (nom, prenom, mail, login, mdp) VALUES(?,?,?,?,?)');
$req -> execute(array($nom, $prenom, $mail, $login, $mdp, $type));

header("location:connexion_restauration.php");

?>
