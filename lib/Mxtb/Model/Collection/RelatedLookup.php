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

namespace Mxtb\Model\Collection;

use Mxtb\Model\Common\GenericCollection;

class RelatedLookup extends GenericCollection
{
    /**
     * @param $key
     * @return \Mxtb\Model\Lookup\RelatedLookup
     */
    public function get($key)
    {
        if (is_object($key)) {
            $key = spl_object_hash($key);
        }
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}