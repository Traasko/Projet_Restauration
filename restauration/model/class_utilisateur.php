<?php

class utilisateur
{
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

public function __construct($nom,$prenom,$mail,$login,$mdp);
    $this->getNom($nom){ return $this->nom };
    $this->getPrenom($prenom){ return $this->prenom };
    $this->getMail($mail){ return $this->mail };
    $this->getMdp($mdp){ return $this->mdp };
public function hydrate(array $donne)
}
public function setnom($nom){
  if (empty($nom)){
    echo"k";
    return;
  }
  $this->_nom = $nom;
}
public function setprenom($prenom){
  if (empty($prenom)){
    echo"k";
    return;
  }
  $this->_prenom = $prenom;
}
public function setmail($mail){
  if (empty($mail)){
    echo"k";
    return;
  }
  $this->_mail = $mail;
}
public function setmdp($mdp){
  if (empty($mdp)){
    echo"k";
    return;
  }
  $this->_mdp = $mdp;
}

 ?>
