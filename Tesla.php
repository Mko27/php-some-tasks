<?php
require_once ('Car.php');

class Tesla extends Car
{
    public function start()
    {
        echo "Please press the key <br>";
    }

    public function breakCar()
    {
        echo "Press break key <br>";
    }

    public function addSpeed(): float
    {
        if($this->currentSpeed === $this->maxSpeed)
            return $this->maxSpeed;
        $this->currentSpeed += 5;
        return $this->currentSpeed;
    }

    public function reduceSpeed(): float
    {
        if($this->currentSpeed == 0)
            return $this->currentSpeed;
        $this->currentSpeed -= 5;
        return $this->currentSpeed;
    }
}