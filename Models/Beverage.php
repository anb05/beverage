<?php
/**
 * Исходный класс опеределяющий тип данных всего паттерна
 *
 * PHP version 7.1.1
 *
 * @category Learn
 *
 * @package Beverage\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensorce.org/licenses/gpl-license.php
 *
 * @link https://github.com/anb05/beverage.git
 */

namespace Beverage\Models;

/**
 * Class Beverage from pattern Decorator
 *
 * @category Models
 *
 * @package Beverage\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensorce.org/licenses/gpl-license.php
 *
 * @link https://github.com/anb05/beverage.git
 */
abstract class Beverage
{

    /**
     * Размер порции - маленкий
     */
    const SMALL = 1;


    /**
     * Размер порции - средний
     */
    const MIDDLE = 2;


    /**
     * Размер порции - большой
     */
    const LARGE = 3;

    /**
     * Стоимость минимальной порции
     *
     * @var float
     */
    //private $price = 0.0;


    /**
     * Размер порции
     *
     * @var int $size размер порции кофе
     */
    public static $size;


    /**
     * Описание декорируемого объекта
     *
     * @var string $description Описание декорируемого объекта
     */
    public $description;


    /**
     * Метод для получения поисания объекта
     *
     * @return string
     */
    public function getDescription (): string
    {
        return $this->description;
    }

    /**
     * Метод расчета стоисмости порции выбраного размера
     *
     * @return mixed
     */
    abstract public function cost();

    /**
     * Устанавливает размер порции кофе
     *
     * @param string $size размер порции
     *
     * @return void
     */
    public function setSize($size = 'middle')
    {
        switch($size) {
            case ("small"):
                self::$size = self::SMALL;
                break;
            case ("large"):
                self::$size = self::LARGE;
                break;
            default:
                self::$size = self::MIDDLE;
        }
    }

    /**
     * Возвращает размер порции кофе
     *
     * @return int
     */
    public function getSize()
    {
        return self::$size;
    }
}