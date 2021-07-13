<?php
abstract class Car
{
    public $model;
    public $color;
    public $year;
    public $box;
    public $engine;
    public $currentSpeed;
    public $maxSpeed;

    public function __construct(string $model, string $color, int $year, string $box, string $engine, float $currentSpeed,float $maxSpeed)
    {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->box = $box;
        $this->engine = $engine;
        $this->currentSpeed = $currentSpeed;
        $this->maxSpeed = $maxSpeed;
    }

    public function info()
    {
        echo "Model: {$this->model} <br> Color: {$this->color} <br> Year: {$this->year} <br> Box: {$this->box} <br> Engine: {$this->engine} <br> Max Speed: {$this->maxSpeed} <br> Current Speed: {$this->currentSpeed} <br>";
    }

    abstract public function start();
    abstract public function breakCar();
    abstract public function addSpeed(): float;
    abstract public function reduceSpeed(): float;
}