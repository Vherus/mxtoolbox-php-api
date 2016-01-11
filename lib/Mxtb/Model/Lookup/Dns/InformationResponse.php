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
 
namespace Mxtb\Model\Lookup\Dns;

use Mxtb\Model\Lookup\AbstractInformationResponse;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     */
    protected $domainName;

    /**
     * @var string|null
     */
    protected $ipAddress;

    /**
     * @var string|null
     */
    protected $ttl;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $time;

    /**
     * @var string|null
     */
    protected $auth;

    /**
     * @var string|null
     */
    protected $parent;

    /**
     * @var string|null
     */
    protected $local;

    /**
     * @return null|string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }

    /**
     * @param string|null $domainName
     */
    public function setDomainName(string $domainName) : InformationResponse
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return null|string
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
     * @return null|string
     */
    public function getTTL() : string
    {
        return $this->ttl;
    }

    /**
     * @param string|null $ttl
     */
    public function setTTL(string $ttl) : InformationResponse
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(string $status) : InformationResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTime() : string
    {
        return $this->time;
    }

    /**
     * @param string|null $time
     */
    public function setTime(string $time) : InformationResponse
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuth() : string
    {
        return $this->auth;
    }

    /**
     * @param string|null $auth
     */
    public function setAuth(string $auth) : InformationResponse
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getParent() : string
    {
        return $this->parent;
    }

    /**
     * @param string|null $parent
     */
    public function setParent(string $parent) : InformationResponse
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocal() : string
    {
        return $this->local;
    }

    /**
     * @param string|null $local
     */
    public function setLocal(string $local) : InformationResponse
    {
        $this->local = $local;
        return $this;
    }
}