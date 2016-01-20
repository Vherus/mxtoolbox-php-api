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

namespace Mxtb\Model\Collection;

use Mxtb\Model\Common\GenericCollection;

class Monitor extends GenericCollection
{
    /**
     * Return results using a specified command
     * @param string $command
     * @return Monitor|static
     */
    public function withCommand(string $command)
    {
        return $this->filter(function ($key, $value) use ($command) {
            if ($value->getAction()->getCommand() == $command) {
                return true;
            } else {
                return false;
            }
        });
    }

    /**
     * Return result with UID
     * @param string $uid
     * @return GenericCollection|static
     */
    public function withUid(string $uid)
    {
        return $this->filter(function ($key, $value) use ($uid) {
            if ($value->getMonitorUid() == $uid) {
                return true;
            } else {
                return false;
            }
        });
    }
}