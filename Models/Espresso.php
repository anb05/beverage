<?php
/**
 * Класс для создания Эспрессо
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
 * Class Espresso
 * @package Beverage\Models
 */
class Espresso extends Beverage
{
    /**
     * Стоимаость маленькой порции
     *
     * @var float
     */
    private $price = 0.66;

    /**
     * Напиток
     *
     * @var string
     */
    public $description = "Эспрессо";


    /**
     * Расчёт стоимости Эспрессо
     *
     * @return float
     */
    public function cost()
    {
        return $this->getSize() * $this->price;
    }
}