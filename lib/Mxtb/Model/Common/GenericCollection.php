<?php declare(strict_types=1);

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

namespace Mxtb\Model\Common;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class GenericCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * @var array
     */
    protected $data;

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
    public function get($key)
    {
        if (is_object($key)) {
            $key = spl_object_hash($key);
        }
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * @param $property
     * @param $value
     * @return GenericCollection
     */
    public function set($key, $value) : GenericCollection
    {
        if ($key === null && is_object($value)) {
            $key = spl_object_hash($value);
        }
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return GenericCollection
     */
    public function add($key, $value) : GenericCollection
    {
        if (!array_key_exists($key, $this->data) && null !== $key) {
            $this->data[$key] = $value;
        } elseif (!array_key_exists($key, $this->data) && null == $key) {
            $this->data[] = $value;
        } elseif (is_array($this->data[$key])) {
            $this->data[$key][] = $value;
        } else {
            $this->data[$key] = [$this->data[$key], $value];
        }

        return $this;
    }

    /**
     * @param $key
     */
    public function remove($key)
    {
        unset($this->data[$key]);
    }

    /**
     * Iterates over each key value pair in the collection passing them to the Closure. If the  Closure function returns
     * true, the current value from input is returned into the result Collection.  The Closure must accept three
     * parameters: (string) $key, (string) $value and return Boolean TRUE or FALSE for each value.
     *
     * @param \Closure $closure
     * @param bool $static
     * @return GenericCollection|static
     */
    public function filter(\Closure $closure, bool $static = true)
    {
        $collection = ($static) ? new static() : new self();

        foreach($this->data as $key => $value) {
            if ($closure($key, $value)) {
                $collection->add($key, $value);
            }
        }

        return $collection;
    }

    /**
     * Sort the collection
     *
     * @example
     *
     * $passed->sort(function($a, $b) {
     *      if ($a->getId() == $b->getId()) {
     *          return 0;
     *      }
     *
     *      return ($a->getId() < $b->getId()) ? -1 : 1;
     * }
     *
     * @param \Closure $closure
     * @return GenericCollection
     */
    public function sort(\Closure $closure) : GenericCollection
    {
        uasort($this->data, $closure);
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