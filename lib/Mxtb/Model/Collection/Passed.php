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

class Passed extends GenericCollection
{
    /**
     * Get all Passed where DelistURL is not null
     * Will still return empty strings
     * @return Passed|static
     */
    public function delistUrlNotNull() : Passed
    {
        return $this->filter(function($key, $value) {
            if (!is_null($value->getDelistUrl())) {
                return true;
            } else {
                return false;
            }
        });
    }

    /**
     * Get all Passed where DelistURL is not null or empty
     * @return Passed|static
     */
    public function delistUrlNotNullOrEmpty() : Passed
    {
        return $this->filter(function($key, $value) {
           if ((!is_null($value->getDelistUrl()) && (!empty($value->getDelistUrl()))))  {
               return true;
           } else {
               return false;
           }
        });
    }
}