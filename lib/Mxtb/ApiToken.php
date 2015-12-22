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

namespace Mxtb;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class ApiToken
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $key The API key to store
     */
    public function __construct($key)
    {
        if (!is_string($key)) {
            throw new InvalidArgumentException('API key must be of type string.');
        }

        $this->token = $key;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->token;
    }
}