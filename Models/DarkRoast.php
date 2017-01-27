<?php
/**
 * Класс для создания кофе Тёмная обжарка
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

use Beverage\Models\Beverage;


/**
 * Class DarkRoast
 *
 * @package Beverage\Models
 */
class DarkRoast extends Beverage
{
    /**
     * Стоимаость маленькой порции
     *
     * @var float
     */
    private $price = 0.33;

    /**
     * Напиток
     *
     * @var string
     */
    public $description = "Домашняя обжарка";


    /**
     * Расчёт стоимости кофе Домашняя обжарка
     *
     * @return float
     */
    public function cost()
    {
        return $this->getSize() * $this->price;
    }
}
