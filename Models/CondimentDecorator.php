<?php
/**
 * Класс для создания обёрток над декорируемым объектом
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
 * Class CondimentDecorator
 *
 * Для создания классов обёрток
 *
 * @category Models
 *
 * @package Beverage\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU
 *
 * @link https://github.com/anb05/beverage.git
 */
abstract class CondimentDecorator extends Beverage
{
}