<?php

class HouseOptions
{
    var $color = "White";
    var $doors = 2;
    var $windows = 5;
}

class House
{
    private $color;
    private $doors;
    private $windows;

    public function __construct(HouseOptions $options)
    {
        $this->color = $options->color;
        $this->doors = $options->doors;
        $this->windows = $options->windows;

    }

    public function details()
    {
        return "This house has $this->doors doors, $this->windows windows and $this->color color.\n";
    }

}

// Testing
$house = new House(new HouseOptions());
echo $house->details();
//Output: This house has 2 doors, 5 windows and White color.


/**
 * HouseFactory that create House object
 * We can create House object directly using House class
 * But, by using this factory, we can skip the detail
 */

class HouseFactory
{
    private $options;

    public function __construct($color, $doors, $windows)
    {
        $options = new HouseOptions();
        $options->color = $color;
        $options->doors = $doors;
        $options->windows = $windows;

        $this->options = $options;
    }

    public function build()
    {
        return new House($this->options);
    }

}

// Factory Pattern Testing
$factory = new HouseFactory("Black", 3, 10);
$house = $factory->build();

echo $house->details();
//Output: This house has 3 doors, 10 windows and Black color.