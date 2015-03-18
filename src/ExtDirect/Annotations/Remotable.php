<?php

/**
 * ExtDirect\Annotations\Remotable
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to version 3 of the GPL license,
 * that is bundled with this package in the file LICENSE, and is
 * available online at http://www.gnu.org/licenses/gpl.txt
 *
 * PHP version 5
 *
 * @category  ExtDirect
 * @package   ExtDirect
 * @author    Philipp Dittert <philipp.dittert@gmail.com>
 * @copyright 2015 Philipp Dittert
 * @license   http://www.gnu.org/licenses/gpl.txt GNU General Public License, version 3 (GPL-3.0)
 * @link      https://github.com/dittertp/ExtDirect
 */

namespace ExtDirect\Annotations;

use ExtDirect\Annotations\Interfaces\MethodInterface;

/**
 * class Remotable
 *
 * @category  ExtDirect
 * @package   ExtDirect
 * @author    Philipp Dittert <philipp.dittert@gmail.com>
 * @copyright 2015 Philipp Dittert
 * @license   http://www.gnu.org/licenses/gpl.txt GNU General Public License, version 3 (GPL-3.0)
 * @link      https://github.com/dittertp/ExtDirect
 * @Annotation
 */
class Remotable implements MethodInterface
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $len = null;

    /**
     * @var string
     */
    protected $methodName;

    /**
     * Sets amount of method parameters if not set already
     *
     * @param integer $number number of required method parameters
     *
     * @return void
     */
    public function setLenIfNotSet($number)
    {
        if ($this->len === null) {
            $this->len = $number;
        }
    }

    /**
     * Sets the original method name
     *
     * @param string $method the original method name
     *
     * @return void
     */
    public function setMethodName($method)
    {
        $this->methodName = $method;
    }

    /**
     * Returns original method name
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Returns remotable name
     *
     * @return string
     */
    public function getAnnotatedName()
    {
        return $this->name;
    }

    /**
     * Returns amount of required method parameters
     *
     * @return int|mixed
     */
    public function getLen()
    {
        if ($this->len === null) {
            $len = 0;
        } else {
            $len = $this->len;
        }

        return $len;
    }
}
