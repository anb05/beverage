<?php
/**
 * Класс для создания кофе Без кофеина
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
 * Class Decaf
 *
 * @package Beverage\Models
 */
class Decaf extends Beverage
{
    /**
     * Стоимаость маленькой порции
     *
     * @var float
     */
    private $price = 0.35;

    /**
     * Напиток
     *
     * @var string
     */
    public $description = "Без кофеина";


    /**
     * Расчёт стоимости кофе Без кофеина
     *
     * @return float
     */
    public function cost()
    {
        return $this->getSize() * $this->price;
    }
}
