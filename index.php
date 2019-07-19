<?php
require_once './src/Unit.php';
require_once './src/Elf.php';
require_once './src/Soldier.php';

const br = "<br>";

$unit = new Unit("Paysan");
$elf = new Elf("Ce genre d'Elf vener");

echo $unit . br;
echo $unit->walk("tOp", 4) . br;
echo $unit->walk("right") . br;
echo $unit->walk("right") . br;
echo $unit->walk("bottom", 7) . br;
echo $unit . br;

echo $elf . br;
echo $elf->walk("tOp", 4) . br;
echo $elf->walk("right") . br;
echo $elf->walk("right") . br;
echo $elf->walk("bottom", 7) . br;
echo $elf . br;