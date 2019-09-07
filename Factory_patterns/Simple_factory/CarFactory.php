<?php
class carFactory {

  public function __construct() {
    // ... //
  }

  public static function build ($type = '') {

    if($type == '') {
      throw new Exception('Invalid car type');
    } else {
      $className = 'Car' .ucfirst($type);

      // Assuming class files are already loaded using autoloader
      if(class_exists($className)) {
        return new $className();
      } else {
        throw new Exception('That car type was not found');
      }
    }
  }
}

?>
