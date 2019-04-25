<?php
  class CityMallBuilding extends Building {
    public function __construct($name, $city, $shops_quantity) {
      parent::__construct($name, $city);
      $this->shops_quantity = $shops_quantity;
    }

    public function countPrice() {
      return $this->shops_quantity * 1000;
    }
  }
 ?>
