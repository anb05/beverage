<?php
session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

require_once __DIR__ . "/Views/index.html";


//use Beverage\Models\Espresso;
use Beverage\Models\HouseBlend;

$coffe = new HouseBlend();
$coffe->setSize();
echo $coffe->cost() . "<br>\n";

echo $coffe->getDescription() . "<br>\n";


echo $coffe->getSize();