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

namespace Mxtb;

class ApiToken
{
    /**
     * @var string
     */
    private $token;

    /**
     * ApiToken constructor.
     * @param $key
     */
    public function __construct(string $key = '')
    {
        $this->set($key);
    }

    /**
     * Get the API token in use
     */
    public function get() : string
    {
        return $this->token;
    }

    /**
     * Set the API token to use
     * @param $key
     * @return ApiToken
     */
    public function set(string $key) : ApiToken
    {
        $this->token = $key;
        return $this;
    }
}