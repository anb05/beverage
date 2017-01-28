<?php
/**
 * Класс приправы кофе соей
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Beverage\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU
 *
 * @link https://github.com/anb05/beverage.git

 */

namespace Beverage\Models;

use Beverage\Models\CondimentDecorator;

/**
 * Class Soy
 *
 * @package Beverage\Models
 */
class Soy extends CondimentDecorator
{
    /**
     * Для хранения ссылки на декорируемый объкт
     *
     * @var
     */
    public $beverage;

    /**
     * Цена шоколада для минимальной порции
     *
     * @var float
     */
    private $price = 0.05;

    /**
     * Soy constructor.
     *
     * @param Beverage $beverage
     *
     * @return void
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * Добавляем в кофе сою и меняем описание
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', с соей';
    }

    public function cost()
    {
        return $this->getSize() * $this->price + $this->beverage->cost();
    }
}
