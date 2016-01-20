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
     * Create a new monitor
     * @param array $data
     * @return Monitor
     */
    public function create(array $data) : Monitor
    {
        $this->post('monitor', $data);

        return $this;
    }

    /**
     * Remove monitor
     * @param Model $monitor
     * @return Monitor
     */
    public function remove(Model $monitor) : Monitor
    {
        $this->delete('monitor/{' . $monitor->getMonitorUid() . '}');
        return $this;
    }
}