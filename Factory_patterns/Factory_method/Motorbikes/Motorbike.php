<?php
/*
The factory method design pattern:
Defines an interface for creating an object,
but allows sublcasses to decide which class
to instantiate
*/
abstract class Motorbike {
  private $brand;

  public function __construct($brand) {
    $this->brand = $brand;
  }

  public function getBrand() {
    return $this->brand;
  }
}

 ?>
