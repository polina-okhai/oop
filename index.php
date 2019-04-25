<?php
require 'Entities/Building.php';
ini_set('display_errors', 1);

$building = new Building('Varus', 'Kiev');
$building2 = new Building('ATB', 'Dnepr');

$building2->hashtagName();

 ?>
