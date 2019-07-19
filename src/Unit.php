<?php

class Unit
{
    private $name;
    private $pv;
    private $position;
    private $speed;

    function __construct($leNom)
    {
        $this->name = $leNom;
        $this->pv = 100;
        $this->position = [0, 0];
        $this->speed = 1;
    }

    function __toString()
    {
        return "Je suis  xXx--> $this->name <--xXx, j'ai $this->pv de vie, je me trouve en [" . implode(", ", $this->position) . "] et je me déplace à $this->speed de vitesse.";
    }

    public function walk(string $direction, int $distance = null)
    {
        if ($distance === null) {
            $distance = 1 * $this->speed;
        }

        $authDirections =  ["RIGHT", "LEFT", "TOP", "BOTTOM"];

        $direction = strtoupper($direction);

        foreach ($authDirections as $authDirection) {
            if ($direction === $authDirection) {
                switch ($direction) {
                    case 'TOP':
                        $this->position[1] += $distance;
                        return "J'ai avancé vers $direction de $distance";
                        break;
                    case 'RIGHT':
                        $this->position[0] += $distance;
                        return "J'ai tourné vers $direction de $distance";
                        break;
                    case 'LEFT':
                        $this->position[0] -= $distance;
                        return "J'ai tourné vers $direction de $distance";
                        break;
                    case 'BOTTOM':
                        $this->position[1] -= $distance;
                        return "J'ai reculé vers $direction de $distance";
                        break;
                }
            }
        }
        return "Mauvaise direction";
    }
}