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

namespace Mxtb\Api\Lookup\Domain;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Lookup\Domain\Dns as Model;

class Dns extends AbstractApi
{
    /**
     * Get the dns status of a domain
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getDns(string $domain, array $headers = [])
    {
        $json = $this->get('lookup/dns/' . $domain, $headers);

        return $this->deserialize($json, Model::class);
    }
}