<?php
class RandomParentClass
{
    final function finalFunction()
    {
        echo "This is a final function. It can not be implemented in it's child classes.";
    }
}
class RandomChildClass extends RandomParentClass
{
}

$randomChildClass = new RandomChildClass();
$randomChildClass->finalFunction();
