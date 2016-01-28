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
 
namespace Mxtb\Model\Lookup\Network\ping;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("Reply")
     * @Accessor(getter="getReply",setter="setReply")
     */
    private $reply;
	
    /**
     * @Type("string")
     * @SerializedName("IPAddress")
     * @Accessor(getter="getIPAddress",setter="setIPAddress")
     */
    private $ipAdress;
	
    /**
     * @Type("string")
     * @SerializedName("Bytes")
     * @Accessor(getter="getBytes",setter="setBytes")
     */
    private $bytes;
	
    /**
     * @Type("string")
     * @SerializedName("Time")
     * @Accessor(getter="getTime",setter="setTime")
     */
    private $time;
	
    /**
     * @Type("string")
     * @SerializedName("TTL")
     * @Accessor(getter="getTTL",setter="setTTL")
     */
    private $ttl;
	
    /**
     * @return string|null
     */
    public function getReply() : string
    {
        return $this->reply;
    }

    /**
     * @param string|null $reply
     * @return InformationResponse
     */
    public function setReply(string $reply) : InformationResponse
    {
        $this->reply = $reply;
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
    public function getBytes() : string
    {
        return $this->bytes;
    }

    /**
     * @param string|null $bytes
     * @return InformationResponse
     */
    public function setBytes(string $bytes) : InformationResponse
    {
        $this->bytes = $bytes;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getTime() : string
    {
        return $this->time;
    }

    /**
     * @param string|null $time
     * @return InformationResponse
     */
    public function setTime(string $time) : InformationResponse
    {
        $this->time = $time;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getTTL() : string
    {
        return $this->ttl;
    }

    /**
     * @param string|null $ttl
     * @return InformationResponse
     */
    public function setTTL(string $ttl) : InformationResponse
    {
        $this->ttl = $ttl;
        return $this;
    }
}