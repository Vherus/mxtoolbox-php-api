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
        $this->serializer = $mxToolbox->getSerializer();
    }

    /**
     * Send a GET request
     * @param string $path
     * @param array $headers
     * @return mixed
     */
    protected function get(string $path, array $headers = [])
    {
        $response = $this->client->get($path, $headers)->getBody()->getContents();

        return $response;
    }

    /**
     * Send a POST request
     * @param string $path
     * @param array $data
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function post(string $path, array $data = [])
    {
        return $this->client->post($path, ['json' => $data]);
    }

    /**
     * Send a DELETE request
     * @param string $path
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function delete(string $path, array $headers = [])
    {
        return $this->client->delete($path, $headers);
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