<?php

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Darien Livermore <daz.livermore@hotmail.com>
 * @version dev
 */

namespace Mxtb\Model\Lookup\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Lookup\Domain\Spf\PassedResponse;
use Mxtb\Model\Lookup\Domain\Spf\InformationResponse;

class Spf extends AbstractDomainLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Domain\Spf\PassedResponse>")
     * @SerializedName("Passed")
     * @Accessor(getter="getPassed",setter="setPassed")
     */
    private $passed;

    /**
     * @Type("array<Mxtb\Model\Lookup\Domain\Spf\InformationResponse>")
     * @SerializedName("Information")
     * @Accessor(getter="getInformation",setter="setInformation")
     */
    private $information;

    /**
     * @return PassedResponse[]|null
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * @param PassedResponse[]|null $passed
     * @return Spf
     */
    public function setPassed(array $passed = null) : Spf
	{
        $this->passed = $passed;
        return $this;
    }

    /**
     * @return InformationResponse[]|null
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param InformationResponse[]|null $information
     * @return Spf
     */
    public function setInformation(array $information = null) : Spf
	{
        $this->information = $information;
        return $this;
    }
}