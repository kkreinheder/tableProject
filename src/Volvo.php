<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 2/14/19
 * Time: 11:57 AM
 */

final class Volvo extends Car {
    public function accelerate() :int
    {
        return 1;
    }

    public function decelerate() :int
    {
        return -1;
    }
}