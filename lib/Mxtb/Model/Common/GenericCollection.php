<?php

/**
 * This file is part of the core PHP package for mxtoolbox-api-wrapper.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-api-wrapper
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

declare(strict_types=1);

namespace Mxtb\Model\Common;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class GenericCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    private $data;

    /**
     * GenericCollection constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get(string $property)
    {
        if (!array_key_exists($property, $this->data)) {
            throw new InvalidArgumentException('Property ' . $property . ' does not exist.');
        } else {
            return $this->data[$property];
        }
    }

    /**
     * @param $property
     * @param $value
     * @return GenericCollection
     */
    public function __set(string $property, string $value) : GenericCollection
    {
        $this->data[$property] = $value;
        return $this;
    }

    /**
     * Clears information data associated with this object
     * @return GenericCollection
     */
    public function clear() : GenericCollection
    {
        $this->data = [];
        return $this;
    }

    /**
     * Return all items as an array
     * @return array
     */
    public function toArray() : array
    {
        return $this->data;
    }

    /**
     * Get all associative keys in data array
     * @return array
     */
    public function getKeys() : array
    {
        return array_keys($this->data);
    }

    /**
     * @param $key
     * @return bool
     */
    public function hasKey(string $key) : bool
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * @param $value
     * @return mixed
     */
    public function hasValue(string $value)
    {
        return array_search($value, $this->data);
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    /**
     * @param mixed $offset
     * @return null
     */
    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ? $this->data[$offset] : null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    /**
     * @return \ArrayIterator|\Traversable
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }
}