<?php
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

namespace Mxtb\Model\Lookup;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("DNS Resolution")
     * @Accessor(getter="getDnsResolution",setter="setDnsResolution")
     */
    private $dnsResolution;

    /**
     * @return string
     */
    public function getDnsResolution() : string
    {
        return $this->dnsResolution;
    }

    /**
     * @param mixed $dnsResolution
     * @return InformationResponse
     */
    public function setDnsResolution(string $dnsResolution) : InformationResponse
    {
        $this->dnsResolution = $dnsResolution;
        return $this;
    }


}