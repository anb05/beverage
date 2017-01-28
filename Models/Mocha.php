<?php
/**
 * Класс приправы кофе шоколадом
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
 * Class Mocha
 *
 * @package Beverage\Models
 */
class Mocha extends CondimentDecorator
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
    protected $price = 0.07;

    /**
     * Mocha constructor.
     *
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;

        $this->description = 'шоколад';
    }

    /**
     * Добавляем в кофе шоколад и меняем описание
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', с ' . $this->description . 'ом';
    }

}