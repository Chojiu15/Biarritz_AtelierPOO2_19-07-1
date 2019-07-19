<?php
class Soldier extends Unit
{
    public function __construct()
    {
        $this->speed = 2;
    }
    public function attack()
    {
        return "À l'attaque !";
    }
}