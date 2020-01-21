<?php

Class Connexion{

    private $mail;
    private $nom;

    public function __construct($mail, $nom){
        $this->setMail($mail);
        $this->setNom($nom);
    }

    public function getMail(){ return $this->mail;}
    public function getNom(){ return $this->nom;}

    public function setMail($mail){
        $bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM inscription WHERE mail=:mail');
        $reponse->execute(array(
        'mail'=>$this->mail));
        $donne=$reponse->fetch();
        $this->mail = $mail;
    }

    public function setNom($nom){
        $bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM inscription WHERE nom=:nom');
        $reponse->execute(array(
        'nom'=>$this->nom));
        $donne=$reponse->fetch();
        $this->nom = $nom;
    }

    public function connexion(){
        $bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM inscription WHERE mail=:mail AND nom=:nom');
        $reponse->execute(array(
        'mail'=>$this->mail,
        'nom'=>$this->nom));
        $donne=$reponse->fetch();

        if ($donne['mail'] == $this->mail && $donne['nom'] == $this->nom){
            echo 'Vous êtes connecté !';
        }
    }

}

$user = new Connexion('t.yalap@lprs.fr', 'Yalap');
$user->connexion();
var_dump($user);
?>
