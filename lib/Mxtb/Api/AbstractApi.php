<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Api;

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use Mxtb\MxToolbox;

abstract class AbstractApi
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * AbstractApi constructor
     * @param MxToolbox $mxToolbox
     */
    public function __construct(MxToolbox $mxToolbox)
    {
        $this->client = $mxToolbox->getClient();
    }

    /**
     * Send a GET request
     * @param string $path
     * @param array $headers
     * @return mixed
     */
    public function get(string $path, array $headers = [])
    {
        $response = $this->client->get($path, $headers)->getBody();

        return $this->decode($response);
    }

    /**
     * Decode the response to JSON
     * @param $response
     * @return mixed
     */
    private function decode($response)
    {
        return is_string($response) ? json_decode($response, true) : $response;
    }

    /**
     * @param $jsonData
     * @param string $class
     * @return array|\JMS\Serializer\scalar|mixed|object
     */
    protected function deserialize($jsonData, string $class)
    {
        return $this->serializer->deserialize($jsonData, $class, 'json');
    }
}