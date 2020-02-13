<?php

require 'class_utilisateur.php';
require 'class_manager.php';

$user = new utilisateur ($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp']);
$manager = new manager($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp']);
$inscription->inscription($user);
 ?>
