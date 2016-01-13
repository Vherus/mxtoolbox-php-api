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

namespace Mxtb\Repository\Lookup;

use Mxtb\Api\Lookup\Network\Blacklist;
use Mxtb\Api\Lookup\Network\Smtp;
use Mxtb\Api\Lookup\Network\Tcp;
use Mxtb\Api\Lookup\Network\Http;
use Mxtb\Api\Lookup\Network\Https;
use Mxtb\Api\Lookup\Network\Ping;
use Mxtb\Api\Lookup\Network\Trace;
use Mxtb\MxToolbox;

class LookupNetworkRepository
{
    /**
     * @var MxToolbox
     */
    private $mxtb;

    /**
     * LookupNetworkRepository constructor
     * @param MxToolbox $mxtb
     */
    public function __construct(MxToolbox $mxtb)
    {
        $this->mxtb = $mxtb;
    }

    /**
     * @param string $domain
     * @return Blacklist
     */
    public function getBlacklist(string $domain) : Blacklist
    {
        $api = new Blacklist($this->mxtb);
        return $api->getBlacklist($domain);
    }

    /**
     * @param string $domain
     * @return Smtp
     */
    public function getSmtp(string $domain) : Smtp
    {
        $api = new Smtp($this->mxtb);
        return $api->getSmtp($domain);
    }

    /**
     * @param string $domain
     * @return Tcp
     */
    public function getTcp(string $domain) : Tcp
    {
        $api = new Tcp($this->mxtb);
        return $api->getTcp($domain);
    }

    /**
     * @param string $domain
     * @return Http
     */
    public function getHttp(string $domain) : Http
    {
        $api = new Http($this->mxtb);
        return $api->getHttp($domain);
    }

    /**
     * @param string $domain
     * @return Https
     */
    public function getHttps(string $domain) : Https
    {
        $api = new Https($this->mxtb);
        return $api->getHttps($domain);
    }

    /**
     * @param string $domain
     * @return Ping
     */
    public function getPing(string $domain) : Ping
    {
        $api = new Ping($this->mxtb);
        return $api->getPing($domain);
    }

    /**
     * @param string $domain
     * @return Trace
     */
    public function getTrace(string $domain) : Trace
    {
        $api = new Trace($this->mxtb);
        return $api->getTrace($domain);
    }
}