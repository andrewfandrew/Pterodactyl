<?php

require_once('CarFactory.php');
require_once('CarChevrolet.php');
require_once('CarPeugeot.php');

// Creating new CarChevrolet
$chevrolet = CarFactory::build('chevrolet');

// Creating new CarPeugeot
$peugeot = CarFactory::build('peugeot');

 ?>
