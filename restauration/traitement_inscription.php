<?php

class utilisateur
{
  private $nom;
  private $prenom;
  private $mail;
  private $login;
  private $mdp;

  public function __construct()
}

try{
$bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
}
catch(Exception $e)
{
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('INSERT into user (nom, prenom, mail, login, mdp) VALUES(?,?,?,?,?)');
$req -> execute(array($nom, $prenom, $mail, $login, $mdp, $type));

header("location:connexion_restauration.php");

?>
