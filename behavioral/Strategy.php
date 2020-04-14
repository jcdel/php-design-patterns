<?php

interface Motorcycle 
{
    public function pick();
}

class Honda implements Motorcycle 
{
    public function pick() 
    {
        echo "Picking Honda for today.\n";
    }
}

class Yamaha implements Motorcycle
{
    public function pick()
    {
        echo "Picking Yamaha for today.\n";
    }
}

class MotorCyclePickerStrategy
{
    public $today;

    public function __construct($today)
    {
        $this->today = $today;
    }

    public function pick()
    {
        if($this->today == "Sunday") {
            $car = new Yamaha();
        } else {
            $car = new Honda();
        }

        $car->pick();
    }
}

// Usage
$mcpicker = new MotorCyclePickerStrategy("Sunday");
$mcpicker->pick();
// Output: Picking Yamaha for today.

$mcpicker->today = "Monday";
$mcpicker->pick();
// Output: Picking Honda for today.