<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Darien Livermore <daz.livermore@hotmail.com>
 * @version dev
 */
 
namespace Mxtb\Model\Lookup\Network\Trace;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("HopCount")
     * @Accessor(getter="getHopCount",setter="setHopCount")
     */
    private $hopCount;
	
    /**
     * @Type("string")
     * @SerializedName("IPAddress")
     * @Accessor(getter="getIPAddress",setter="setIPAddress")
     */
    private $ipAddress;
	
    /**
     * @Type("string")
     * @SerializedName("HostName")
     * @Accessor(getter="getHostName",setter="setHostName")
     */
    private $hostName;
	
    /**
     * @return string|null
     */
    public function getHopCount() : string
    {
        return $this->hopCount;
    }

    /**
     * @param string|null $hopCount
     * @return InformationResponse
     */
    public function setHopCount(string $hopCount) : InformationResponse
    {
        $this->hopCount = $hopCount;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getIPAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     * @return InformationResponse
     */
    public function setIPAddress(string $ipAddress) : InformationResponse
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getHostName() : string
    {
        return $this->hostName;
    }

    /**
     * @param string|null $hostName
     * @return InformationResponse
     */
    public function setHostName(string $hostName) : InformationResponse
    {
        $this->hostName = $hostName;
        return $this;
    }
}