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
    private $apiToken;

    /**
     * @param $apiToken
     */
    public function setApiToken(ApiToken $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Get the instance of the ApiToken
     *
     * @return ApiToken
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }
}