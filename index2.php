<?php

class dog
{

    private $name;
    private $age;
    private $color;

    function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }



    function getDogDetails()
    {
        return 'Name: '.$this->name.'<br/>'.
               'Age: '.$this->age.'<br/>'.
               'Color: '.$this->color;
    }


    function setDogName($name)
    {
        $this->name = $name;
        return 'Name: '.$this->name;
    }

}


class DogColor extends dog
{
    private $color = 'white';

    function getDogColor()
    {
        return $this->color;
    }
}



$dog1 = new dog('chupapi', 8, 'white');

?>