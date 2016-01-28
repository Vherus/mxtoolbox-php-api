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

use Mxtb\Api\Lookup\Domain\Mx;
use Mxtb\Api\Lookup\Domain\A;
use Mxtb\Api\Lookup\Domain\Dns;
use Mxtb\Api\Lookup\Domain\Spf;
use Mxtb\Api\Lookup\Domain\Txt;
use Mxtb\Api\Lookup\Domain\Soa;
use Mxtb\MxToolbox;

class DomainRepository
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
     * @return \Mxtb\Model\Lookup\Domain\Mx
     */
    public function getMx(string $domain) : \Mxtb\Model\Lookup\Domain\Mx
    {
        $api = new Mx($this->mxtb);
        return $api->getMx($domain);
    }

    /**
     * @param string $domain
     * @return \Mxtb\Model\Lookup\Domain\A
     */
    public function getA(string $domain) : \Mxtb\Model\Lookup\Domain\A
    {
        $api = new A($this->mxtb);
        return $api->getA($domain);
    }

    /**
     * @param string $domain
     * @return \Mxtb\Model\Lookup\Domain\Dns
     */
    public function getDns(string $domain) : \Mxtb\Model\Lookup\Domain\Dns
    {
        $api = new Dns($this->mxtb);
        return $api->getDns($domain);
    }

    /**
     * @param string $domain
     * @return \Mxtb\Model\Lookup\Domain\Spf
     */
    public function getSpf(string $domain) : \Mxtb\Model\Lookup\Domain\Spf
    {
        $api = new Spf($this->mxtb);
        return $api->getSpf($domain);
    }

    /**
     * @param string $domain
     * @return \Mxtb\Model\Lookup\Domain\Txt
     */
    public function getTxt(string $domain) : \Mxtb\Model\Lookup\Domain\Txt
    {
        $api = new Txt($this->mxtb);
        return $api->getTxt($domain);
    }

    /**
     * @param string $domain
     * @return \Mxtb\Model\Lookup\Domain\Soa
     */
    public function getSoa(string $domain) : \Mxtb\Model\Lookup\Domain\Soa
    {
        $api = new Soa($this->mxtb);
        return $api->getSoa($domain);
    }
}