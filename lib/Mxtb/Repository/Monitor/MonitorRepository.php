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

use Mxtb\Api\Monitor\Monitor;
use Mxtb\Model\Collection\Monitor as Collection;
use Mxtb\Model\Monitor\Monitor as Model;
use Mxtb\MxToolbox;

class MonitorRepository
{
    /**
     * @var MxToolbox
     */
    private $mxtb;

    /**
     * @var Monitor
     */
    private $monitorApi;

    /**
     * @var Collection
     */
    private $collection;

    /**
     * @var array
     */
    private $createQueue = [];

    /**
     * @var array
     */
    private $deleteQueue = [];

    /**
     * MonitorRepository constructor
     * @param MxToolbox $mxtb
     */
    public function __construct(MxToolbox $mxtb)
    {
        $this->mxtb = $mxtb;
        $this->monitorApi = new Monitor($this->mxtb);
        $this->collection = $this->monitorApi->all();
    }

    /**
     * Reload the collection
     */
    public function reload()
    {
        $this->collection = $this->monitorApi->all();
    }

    /**
     * Get all monitors in the collection
     * @return Collection
     */
    public function all() : Collection
    {
        return $this->collection;
    }

    /**
     * Get monitor with UID
     * @param string $uid
     * @return Collection
     */
    public function withUid(string $uid) : Collection
    {
        return $this->collection->withUid($uid);
    }

    /**
     * Add new monitor to create queue - will not take effect until save() is called
     * @param string $command
     * @param string $url
     * @param bool $immediate Set true if you do not wish to queue this create
     */
    public function create(string $command, string $url, bool $immediate = false)
    {
        $data = [
            'ActionString' => $command . ':' . $url,
            'Tags' => []
        ];

        if ($immediate) {
            $this->monitorApi->create($data);
            $this->reload();
        } else {
            array_push($this->createQueue, $data);
        }
    }

    /**
     * Add existing monitor to delete queue - will not take effect until save() is called
     * @param Model $monitor
     * @param bool $immediate Set true if you do not wish to queue this delete
     */
    public function delete(Model $monitor, bool $immediate = false)
    {
        if ($immediate) {
            $this->monitorApi->remove($monitor);
            $this->reload();
        } else {
            array_push($this->deleteQueue, $monitor);
        }
    }

    /**
     * Add existing monitor to delete queue - will not take effect until save() is called
     * @param string $uid
     * @param bool $immediate Set true if you do not wish to queue this delete
     */
    public function deleteByUid(string $uid, bool $immediate = false)
    {
        $monitor = $this->withUid($uid)[0];

        if ($immediate) {
            $this->monitorApi->remove($monitor);
            $this->reload();
        } else {
            array_push($this->deleteQueue, $monitor);
        }
    }

    /**
     * Save all changes - process create and delete queue
     */
    public function save()
    {
        if (!empty($this->createQueue)) {
            foreach ($this->createQueue as $createQueue) {
                $this->monitorApi->create($createQueue);
            }
        }

        if (!empty($this->deleteQueue)) {
            foreach ($this->deleteQueue as $deleteQueue) {
                $this->monitorApi->remove($deleteQueue[0]);
            }
        }

        $this->clear();
        $this->reload();
    }

    /**
     * Clear all changes from the update queue
     */
    public function clear()
    {
        $this->createQueue = [];
        $this->deleteQueue = [];
    }
}