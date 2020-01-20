<?php
class utilisateur
{
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

  public function __construct($nom,$prenom,$mail,$mdp)
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setMail($mail);
    $this->setMdp($mdp);
    $this->hydrate($donne);
}

try{
$bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
}
catch(Exception $e)
{
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO user (nom, prenom, mail, mdp) VALUES(?,?,?,?)');
$req -> execute(array($nom, $prenom, $mail, $mdp, $type));

header("location:connexion_restauration.php");

?>
