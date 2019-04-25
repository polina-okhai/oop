<?php
require 'Entities/Building.php';
require 'Entities/CityMallBuilding.php';
require 'Entities/ResidentialHouseBuilding.php';
ini_set('display_errors', 1);

// $building = new Building('Varus', 'Kiev');
// $building2 = new Building('ATB', 'Dnepr');
// $city_mall = new CityMallBuilding('Most City', 'Dnepr', 100);
// $city_mall = new CityMallBuilding(100);
// $building2->hashtagName();
// $city_mall->hashtagName();
// var_dump($city_mall);
// echo $city_mall->countPrice();
$residential_house = new ResidentialHouseBuilding('Pobeda', 'Kharkov', 400);
$residential_house->hashtagName();
// echo $residential_house->countWaterPrice();

 ?>
