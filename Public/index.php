<?php
session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

foreach ($_POST as $key => $value) {
    switch ($key) {
        case 'coffee':
            switch ($value) {
                case 'espresso':
                    $beverage = new \Beverage\Models\Espresso();
                    break;
                case 'dark_roast':
                    $beverage = new \Beverage\Models\DarkRoast();
                    break;
                case 'decaf':
                    $beverage = new \Beverage\Models\Decaf();
                    break;
                default:
                    $beverage = new \Beverage\Models\HouseBlend();
            }
            break;
        case 'size':
            switch ($value) {
                case 'small':
                    $beverage->setSize('small');
                    break;
                case 'large':
                    $beverage->setSize('large');
                    break;
                default:
                    $beverage->setSize('middle');
            }
            break;
        case 'milk':
            $beverage = new \Beverage\Models\Milk($beverage);
            break;
        case 'mocha':
            $beverage = new \Beverage\Models\Mocha($beverage);
            break;
        case 'soy':
            $beverage = new \Beverage\Models\Soy($beverage);
            break;
        case 'whip':
            $beverage = new \Beverage\Models\Whip($beverage);
            break;
    }
}

if (!empty($beverage)) {
    $describe = $beverage->getDescription();
    $cost = $beverage->cost();
}

require_once __DIR__ . "/Views/index.html";
