<?php
declare(strict_types=1);

abstract class Car
{
    public $wheels;
    public $make;
    public $model;
    public $year;
    public $doors;
    public $weight;
    public $engine;

    public function accelerate() :int
    {

    }

    public function decelerate() :int
    {

    }

    public function carColor() :array
    {
        $array = [
            'one' => 'blue',
            'two' => 'green',
            'three'=> 'red'
        ];

        return $array;
    }
}

