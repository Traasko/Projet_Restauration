<?php

require('../manager/manager_connexion.php');
require('../model/class_reservation.php');

$reservation = new Reservation($_POST['date'], $_SESSION['nom'], $_SESSION['prenom'], $_POST['time']);
$manager = new Manager();
$manager->reservation($reservation);

var_dump($reservation);
?>
