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

namespace Mxtb\Repository\Monitor;

use Mxtb\Api\Monitor\History;
use Mxtb\Model\Collection\History as Collection;
use Mxtb\Model\Monitor\Monitor;
use Mxtb\MxToolbox;

class HistoryRepository
{
    /**
     * @var MxToolbox
     */
    private $mxtb;

    /**
     * @var History
     */
    private $historyApi;

    /**
     * @var Collection
     */
    private $collection;

    /**
     * @var Monitor
     */
    private $monitor;

    /**
     * HistoryRepository constructor
     * @param MxToolbox $mxtb
     * @param Monitor $monitor
     */
    public function __construct(MxToolbox $mxtb, Monitor $monitor)
    {
        $this->mxtb = $mxtb;
        $this->historyApi = new History($this->mxtb);
        $this->collection = $this->historyApi->all($monitor);
    }

    /**
     * Get full history collection
     * @return Collection
     */
    public function all() : Collection
    {
        return $this->collection;
    }

    /**
     * Reload the collection from the current Monitor
     */
    public function reload()
    {
        $this->collection = $this->historyApi->all($this->monitor);
    }

    /**
     * @param Monitor $monitor
     * @return HistoryRepository
     */
    public function setMonitor(Monitor $monitor) : HistoryRepository
    {
        $this->monitor = $monitor;
        return $this;
    }
}