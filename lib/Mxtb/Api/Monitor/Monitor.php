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

namespace Mxtb\Api\Monitor;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Monitor\Monitor as Model;
use Mxtb\Model\Collection\Monitor as Collection;

class Monitor extends AbstractApi
{
    /**
     * Get all monitored items associated with supplied API token
     * @return Collection
     */
    public function all() : Collection
    {
        $arr = [];
        $monitors = json_decode($this->get('monitor'), true);

        foreach ($monitors as $monitor) {
            array_push($arr, $this->deserialize(json_encode($monitor), Model::class));
        }

        return new Collection($arr);
    }

    /**
     * Get a monitor by UID
     * @param string $uid
     * @param array $headers
     * @return array|\JMS\Serializer\scalar|mixed|object
     */
    public function byUid(string $uid, array $headers = [])
    {
        $json = $this->get('monitor/{' . $uid . '}', $headers);
        return $this->deserialize($json, Model::class);
    }

    /**
     * Create a new monitor
     * @param string $command The monitor command to use (such as dns, blacklist etc.)
     * @param string $url The URL to create a monitor for
     * @param array $tags
     * @return Monitor
     */
    public function create(string $command, string $url, array $tags = []) : Monitor
    {
        $data = [
            'ActionString' => $command . ':' . $url,
            'Tags' => $tags
        ];

        $this->post('monitor', $data);

        return $this;
    }

    /**
     * @param string $uid
     * @return Monitor
     */
    public function remove(Model $monitor) : Monitor
    {
        $this->delete('monitor/{' . $monitor->getMonitorUid() . '}');
        return $this;
    }

    /**
     * @param string $uid
     * @return Monitor
     */
    public function removeByUid(string $uid) : Monitor
    {
        $this->delete('monitor/{' . $uid . '}');
        return $this;
    }
}