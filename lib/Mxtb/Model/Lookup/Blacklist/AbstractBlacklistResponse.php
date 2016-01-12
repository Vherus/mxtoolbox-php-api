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


namespace Mxtb\Model\Lookup\Blacklist;

use Mxtb\Model\Lookup\AbstractResponse;

abstract class AbstractBlacklistResponse extends AbstractResponse
{
    /**
     * @Type("string")
     * @SerializedName("BlacklistResponseTime")
     * @Accessor(getter="getBlacklistResponseTime",setter="setBlacklistResponseTime")
     */
    protected $blacklistResponseTime;

    /**
     * @return null|string
     */
    public function getBlacklistResponseTime() : string
    {
        return $this->blacklistResponseTime;
    }

    /**
     * @param null|string $blacklistResponseTime
     * @return AbstractBlacklistResponse
     */
    public function setBlacklistResponseTime(string $blacklistResponseTime) : AbstractBlacklistResponse
    {
        $this->blacklistResponseTime = $blacklistResponseTime;
        return $this;
    }
}