<?php
class ResidentialHouseBuilding extends Building{
  public function __construct($name, $city, $people_quantity) {
    parent::__construct($name, $city);
    $this->people_quantity = $people_quantity;
  }

  public function hashtagName() {
    echo"#{$this->name}, {$this->city}, price - $ {$this->countWaterPrice()}";
  }

  public function countWaterPrice() {
    return $this->people_quantity * 120;
  }
}
 ?>
