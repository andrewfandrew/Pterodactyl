<?php

require_once('DucatiMotorbike.php');
require_once('YamahaMotorbike.php');

class MotorbikeFactory {
  public static function build($brand) {
    $motorbike = ucwords($brand) . 'Motorbike';

    if(class_exists($motorbike)) {
      return new $motorbike();
    } else {
      throw new Exception("Hey Andrew/ Abe!.. We cannot create the motorbike.")
    }
  }
}
 ?>
