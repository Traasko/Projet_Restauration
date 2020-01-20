<?php
require 'class_utilisateur.php';

class manager
{
  public function inscription($donne){
    if(isset($this->nom) && isset($this->prenom) && isset($this->mail) && isset($this->mdp))}
    try{
      $bdd= new PDO ('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
    }
    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO restauration(nom, prenom, mail, mdp) VALUES(?,?,?,?)')
    $req->execute(array($donne->getnom(), $donne->getprenom(), $donne->getmail(), $donne->getmdp()));
    }
  }
}
?>
