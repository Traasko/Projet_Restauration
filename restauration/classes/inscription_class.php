<?php

require 'class_utilisateur.php';
require 'class_manager.php';

$inscription = new inscription($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['mdp']);
$inscription->inscription();
 ?>
