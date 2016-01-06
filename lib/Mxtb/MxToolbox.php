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

declare(strict_types=1);

namespace Mxtb;

class MxToolbox
{
    /**
     * @var ApiToken
     */
    private $apiToken;

    /**
     * MxToolbox constructor.
     * @param ApiToken|null $apiToken
     */
    public function __construct(ApiToken $apiToken = null)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Set the API token to use
     * @param $apiToken
     * @return MxToolbox
     */
    public function setApiToken(ApiToken $apiToken) : MxToolbox
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * Get the instance of the ApiToken
     * @return ApiToken
     */
    public function getApiToken() : ApiToken
    {
        return $this->apiToken;
    }
}