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

class InformationResponse
{
    /**
     * @var string
     */
    private $hopCount;
	
    /**
     * @var string
     */
    private $ipAddress;
	
    /**
     * @var string
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
     */
    public function setHostName(string $hostName) : InformationResponse
    {
        $this->hostName = $hostName;
        return $this;
    }
}