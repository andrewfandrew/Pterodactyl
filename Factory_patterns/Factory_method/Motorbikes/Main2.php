<?php
// This is a different example of factory get_class_method
// If you only have one brand but swap it regularly
require_once('DucatiMotorbike.php');

class MotorbikeFactory {
  public static function build() {
    return new DucatiMotorbike();
  }
}

class Order {
  public function createMotorbike() {
    MotorbikeFactory::build();
  }
}


 ?>
