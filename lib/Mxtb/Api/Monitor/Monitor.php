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

namespace Mxtb\Api\Monitor;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Common\Tag;

class Monitor extends AbstractApi
{
    /**
     * Get all monitored items associated with supplied API token
     * @return mixed
     */
    public function all()
    {
        return $this->get('monitor');
    }
}