<?php

require('DucatiMotorbike.php');
require('YamahaMotorbike.php');

//$yamaha = new YamahaMotorbike();
//$ducati = new DucatiMotorbike();
$yamaha = MotorbikeFactory::build('yamaha');
$ducati = MotorbikeFactory::build('ducati');

 ?>
