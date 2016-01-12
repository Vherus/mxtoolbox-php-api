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


namespace Mxtb\Model\Lookup\Network\Blacklist;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
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
     * @return string|null
     */
    public function getBlacklistResponseTime()
    {
        return $this->blacklistResponseTime;
    }

    /**
     * @param null|string $blacklistResponseTime
     * @return AbstractBlacklistResponse
     */
    public function setBlacklistResponseTime(string $blacklistResponseTime = null) : AbstractBlacklistResponse
    {
        $this->blacklistResponseTime = $blacklistResponseTime;
        return $this;
    }
}