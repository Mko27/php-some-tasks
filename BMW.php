<?php
require_once ('Car.php');

class BMW extends Car
{
    public function start()
    {
        echo "Please unlock the key <br>";
    }

    public function breakCar()
    {
        echo "Press breaks clamp <br>";
    }

    public function addSpeed(): float
    {
        if($this->currentSpeed === $this->maxSpeed)
            return $this->maxSpeed;
        $this->currentSpeed += 20;
        return $this->currentSpeed;
    }

    public function reduceSpeed(): float
    {
        if($this->currentSpeed == 0)
            return $this->currentSpeed;
        $this->currentSpeed -= 20;
        return $this->currentSpeed;
    }
}