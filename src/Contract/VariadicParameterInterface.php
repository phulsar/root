<?php
/**
 * This file is part of the PHulsar Framework.
 *
 * (c)2017 Matthias Kaschubowski
 *
 * This code is licensed under the MIT license,
 * a copy of the license is stored at the project root.
 */

namespace Phulsar\Contract;


interface VariadicParameterInterface extends \IteratorAggregate
{
    /**
     * VariadicParameter constructor.
     * @param array ...$values
     */
    public function __construct(... $values);
}
