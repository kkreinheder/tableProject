<?php
declare(strict_types=1);

abstract class Person
{
    public $name;
    public $age;
    public $gender;
    public $email;
    public $birthday;

    public function isAnAdult() :int
    {

    }

    public function isMale() :int
    {

    }

    public function personNames() :array
    {
        $array = [
            'one' => 'John',
            'two' => 'Kate',
            'three'=> 'Jack'
        ];

        return $array;
    }
}

