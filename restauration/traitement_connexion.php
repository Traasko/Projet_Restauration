<?php
session_start ();

try{
$bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
}
catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * FROM user WHERE mail=:mail AND mdp=:mdp');
$reponse->execute(array(
'mail'=>$_POST['mail'],
'mdp'=>md5($_POST['mdp'])));
$donne=$reponse->fetch();

var_dump($donne);

if (isset($_POST['mail']) && isset($_POST['mdp'])) {

  if ($donne['mail'] == $_POST['mail'] && $donne['mdp'] == md5($_POST['mdp'])) {

    $_SESSION['nom'] = $donne['nom'];
    $_SESSION['prenom'] = $donne['prenom'];
    $_SESSION['mail'] = $donne['mail'];
    $_SESSION['mdp'] = $donne['mdp'];
    $_SESSION['id'] = $donne['id'];

    header ('location: index.php');

  }
  else {
    echo '<body onLoad="alert(\'Non\')">';

    echo '<meta http-equiv="refresh" content="0;URL=connexion_siteweb.php">';
  }
}
else {
  echo 'Veuillez remplir les champs vides';
}

?>
