<?php
session_start ();

try{
$bdd= new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
}
catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * FROM user WHERE login=:login AND mdp=:mdp');
$reponse->execute(array(
'login'=>$_POST['login'],
'mdp'=>md5($_POST['mdp'])));
$donne=$reponse->fetch();

var_dump($donne);

if (isset($_POST['login']) && isset($_POST['mdp'])) {

  if ($donne['login'] == $_POST['login'] && $donne['mdp'] == md5($_POST['mdp'])) {

    $_SESSION['login'] = $donne['login'];
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
