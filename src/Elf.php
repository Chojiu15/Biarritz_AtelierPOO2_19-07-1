<?php
class Elf extends Unit
{
    public function __construct(string $leNom)
    {
        parent::__construct($leNom);
        $this->speed = 5;
    }
    public function attack()
    {
        return "À l'attaque !";
    }
}