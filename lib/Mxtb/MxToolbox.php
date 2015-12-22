<?php

/**
 * This file is part of the core PHP package for mxtoolbox-api-wrapper.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-api-wrapper
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb;

class MxToolbox
{
    /**
     * @var ApiToken
     */
    private static $apiToken;

    /**
     * @param $apiToken
     */
    public static function setApiToken(ApiToken $apiToken)
    {
        self::$apiToken = $apiToken;
    }
}