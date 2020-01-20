<?php

class utilisateur
{
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

public function __construct($nom,$prenom,$mail,$login,$mdp){

}
public function hydrate(array $donne){

}

public function setnom($nom){
  if (empty($nom)){
    return;
  }
  $this->_nom = $nom;
}
public function setprenom($prenom){
  if (empty($prenom)){
    return;
  }
  $this->_prenom = $prenom;
}
public function setmail($mail){
  if (empty($mail)){
    return;
  }
  $this->_mail = $mail;
}
public function setmdp($mdp){
  if (empty($mdp)){
    return;
  }
  $this->_mdp = $mdp;
}
public function nom($nom){
  return $this->_nom;
}
public function prenom($prenom){
  return $this->_prenom;
}
public function mail($mail){
  return $this->_mail;
}
public function mdp($mdp){
  return $this->_mdp;
}
}
?>
