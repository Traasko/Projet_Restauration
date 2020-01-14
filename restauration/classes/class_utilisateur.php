<?php

class utilisateur
{
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;

public function __construct($nom,$prenom,$mail,$login,$mdp)
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setMail($mail);
    $this->setMdp($mdp);
    $this->hydrate($donne);
}
public function setNom($nom){
  if (empty($nom)){
    echo"k";
    return;
  }
  $this->nom = $nom;
}
public function setPrenom($prenom){
  if (empty($prenom)){
    echo"k";
    return;
  }
  $this->prenom = $prenom;
}
public function setMail($mail){
  if (empty($mail)){
    echo"k";
    return;
  }
  $this->mail = $mail;
}
public function setMdp($mdp){
  if (empty($mdp)){
    echo"k";
    return;
  }
  $this->mdp = $mdp;
}

 ?>
