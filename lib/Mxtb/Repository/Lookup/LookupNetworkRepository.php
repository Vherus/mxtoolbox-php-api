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
     * @return \Mxtb\Model\Lookup\Network\Blacklist
     */
    public function getBlacklist(string $domain) : \Mxtb\Model\Lookup\Network\Blacklist
    {
        $api = new Blacklist($this->mxtb);
        return $api->getBlacklist($domain);
    }
}