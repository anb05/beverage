<?php
/**
 * Класс приправы кофе молоком
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
 * Class Milk
 *
 * @package Beverage\Models
 */
class Milk extends CondimentDecorator
{
    /**
     * Для хранения ссылки на декорируемый объкт
     *
     * @var
     */
    public $beverage;

    /**
     * Цена молока для минимальной порции
     *
     * @var float
     */
    protected $price = 0.03;

    /**
     * Milk constructor.
     *
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;

        $this->description = ", с молочной пеной";
    }

    /**
     * Добавляем в кофе молочную пену и меняем описание
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . $this->description;
    }
}
