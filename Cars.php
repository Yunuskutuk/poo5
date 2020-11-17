<?php

require_once 'Vehicle.php';

class Cars extends Vehicle
require_once 'LightableInterface.php';

class Cars extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected $hasParkBrake = true;

    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake($hasParkBreak)
    {
        $this->hasParkBrake = $hasParkBreak;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function start()
    {
        if ($this->hasParkBrake === true)
            throw(new Exception("Frein à main bloqué."));
        else
            $this->currentSpeed = 3;
        return "Car started !";
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}