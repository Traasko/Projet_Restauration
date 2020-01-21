<?php

require('class_utilisateur.php');
require('class_manager.php');

$user = new utilisateur ('Yalap', 'Thomas', 't.yalap@lprs.fr', 'thomas');
$manager = new Manager();
$manager->inscription($user);
var_dump($user);

 ?>
