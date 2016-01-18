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

namespace Mxtb\Api\Monitor\Domain;

use Mxtb\Api\AbstractApi;

class Dns extends AbstractApi
{
    /**
     * @param string $domain
     * @param array $headers
     * @return mixed
     */
    public function getDns(string $domain, array $headers = [])
    {
        if (!array_key_exists('ActionString', $headers)) {
            $headers['ActionString'] = 'dns:' . $domain;
        }

        $json = $this->get('monitor', $headers);

        return $json;
    }
}