<?php

require_once 'Vehicle.php';

$Bike = new Bike("black", 1, 3);

$Bike->setCurrentSpeed(11);

echo "Le vélo roule à " . $Bike->getCurrentSPeed() . " Km/h <br/>";
if ($Bike->switchOn() == true)
{
    echo "Les lumières sont allumées!";
}
else
{
    echo "Les lumières sont éteintes!";
}