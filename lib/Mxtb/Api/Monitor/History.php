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
use Mxtb\Model\Monitor\History as Model;
use Mxtb\Model\Collection\History as Collection;
use Mxtb\Model\Monitor\Monitor as MonitorModel;

class History extends AbstractApi
{
    /**
     * @param MonitorModel $monitor
     * @return Model
     */
    public function all(MonitorModel $monitor)
    {
        $arr = [];
        $history = json_decode($this->get('history/' . $monitor->getMonitorUid()), true);

        foreach ($history as $h) {
            array_push($arr, $this->deserialize(json_encode($h), Model::class));
        }

        return new Collection($arr);
    }
}