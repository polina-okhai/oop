<?php
class Building {
protected $name;
private $city;

  public function __construct($name, $city){
    $this->name = $name;
    $this->city = $city;
  }

  public function hashtagName() {
    echo"#{$this->name}, {$this->city}";
  }

}
 ?>
