<?php
    session_start();
Class Manager{

    public function connexion($connex){
        $bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $reponse=$bdd->prepare('SELECT * FROM ins_rest WHERE mail=:mail AND mdp=:mdp');
        $reponse->execute(array(
        'mail'=>$connex->getMail(),
        'mdp'=>$connex->getMdp()));
        $donne=$reponse->fetch();

        if ($donne['mail'] == $connex->getMail() && $donne['mdp'] == $connex->getMdp()){
            $_SESSION['nom'] = $donne['nom'];
            $_SESSION['prenom'] = $donne['prenom'];
            $_SESSION['mail'] = $donne['mail'];
            $_SESSION['mdp'] = $donne['mdp'];
            header('location: ../index.php');
        }
        else{
            echo 'Vous n\'êtes pas connecter';
        }
    }

    public function inscription($ins){
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
        $req = $bdd->prepare('INSERT INTO ins_rest(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
        $req->execute(array('nom'=>$ins->getNom(), 'prenom'=>$ins->getPrenom(), 'mail'=>$ins->getMail(), 'mdp'=>$ins->getMdp()));
    }
}
