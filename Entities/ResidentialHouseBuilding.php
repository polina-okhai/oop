<?php
class ResidentialHouseBuilding extends Building{
  public function __construct($name, $city, $people_quantity) {
    parent::__construct($name, $city);
    $this->people_quantity = $people_quantity;
  }

  public function countWaterPrice() {
    return $this->people_quantity * 120;
  }
}
 ?>
