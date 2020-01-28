<?php

require('../manager/connexion_manager.php');
require('../model/class_inscription.php');

$inscription = new Inscription($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp'], $_POST['mdp2']);
$manager=new Manager();
$manager->inscription($inscription);

var_dump($inscription);
