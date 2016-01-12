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

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("DNS Resolution")
     * @Accessor(getter="getDnsResolution",setter="setDnsResolution")
     */
    private $dnsResolution;

    /**
     * @return string|null
     */
    public function getDnsResolution()
    {
        return $this->dnsResolution;
    }

    /**
     * @param string|null $dnsResolution
     * @return InformationResponse
     */
    public function setDnsResolution(string $dnsResolution = null) : InformationResponse
    {
        $this->dnsResolution = $dnsResolution;
        return $this;
    }
}