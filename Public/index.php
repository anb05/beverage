<?php
session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

if (!empty($_POST)) {
    switch ($_POST['coffee']) {
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

    switch ($_POST['size']) {
        case 'small':
            $beverage->setSize('small');
            break;
        case 'large':
            $beverage->setSize('large');
            break;
        default:
            $beverage->setSize('middle');
    }

    foreach ($_POST as $key => $value) {
        switch ($key) {
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

    $describe = $beverage->getDescription();
    $cost = $beverage->cost();

    switch (\Beverage\Models\Beverage::$size) {
        case \Beverage\Models\Beverage::SMALL:
            $size = 'Порция: маленькая';
            break;
        case \Beverage\Models\Beverage::LARGE:
            $size = 'Порция: большая';
            break;
        default:
            $size = 'Порция: средняя';
    }
}

require_once __DIR__ . "/Views/index.html";
