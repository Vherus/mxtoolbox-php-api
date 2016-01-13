<?php declare(strict_types = 1);

/**
 * This file is part of mxtoolbox-php-api
 *
 * Copyright (c) 2016 Nathan King (nkvherus@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 *
 * @author Nathan King (nkvherus@gmail.com)
 * @copyright 2016 Nathan King (nkvherus@gmail.com)
 */

namespace Mxtb\Api\Lookup\Network;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Lookup\Network\Blacklist as BlacklistModel;

class Blacklist extends AbstractApi
{
    /**
     * Get the blacklist status of a domain
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getBlacklist(string $domain, array $headers = [])
    {
        $json = $this->get('lookup/blacklist/' . $domain, $headers);

        return $this->deserialize($json, BlacklistModel::class);
    }
}