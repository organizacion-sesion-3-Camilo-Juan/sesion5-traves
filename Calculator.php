<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }

    public function esPar($a, $b)
    {
        if (($a % $b)==0)
            return "Par";
        else 
            return "Impar";
    }
 
}
