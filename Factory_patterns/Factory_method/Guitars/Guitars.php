<?php

/**
 * @Author Abraham Elie
 */

class Guitar{
    private $guitarMake;
    private $guitarModel;

    public function __construct($make, $model)
    {
        $this->guitarMake = $make;
        $this->guitarModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->guitarMake . ' ' . $this->guitarModel;
    }
}

class GuitarFactory{
    public static function create($make, $model)
    {
        return new Guitar($make, $model);
    }
}


class FenderGuitar extends Guitar{
    public function __construct() {
    parent::__construct('FenderGuitar');
  }
}

class YamhaGuitar extends Guitar{
    public function __construct() {
    parent::__construct('YamahaGuitar');
  }
}

class Order{
  public function createGuitar($model) { 
    switch($model) {
      case 'YamahaGuitar':
        return new YahamaGuitar();
        break;
      case 'FenderGuitar':
        return new FenderGuitar();
        break;
    }
  }
}



$gibson = GuitarFactory::create('lespaul', 'guitar');

print_r($gibson->getMakeAndModel());
echo "<br>"; 
var_dump($gibson); 
  
