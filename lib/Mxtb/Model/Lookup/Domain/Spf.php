<?php declare(strict_types = 1);

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
use Mxtb\Model\Collection\Passed;
use Mxtb\Model\Collection\Information;

class Spf extends AbstractDomainLookup
{
    /**
     * @var Passed
     *
     * @Type("array<Mxtb\Model\Lookup\Domain\Spf\PassedResponse>")
     * @SerializedName("Passed")
     * @Accessor(getter="getPassed",setter="setPassed")
     */
    private $passed;

    /**
     * @var Information
     *
     * @Type("array<Mxtb\Model\Lookup\Domain\Spf\InformationResponse>")
     * @SerializedName("Information")
     * @Accessor(getter="getInformation",setter="setInformation")
     */
    private $information;

    /**
     * @return Passed|null
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
        $this->passed = new Passed($passed);
        return $this;
    }

    /**
     * @return Information|null
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
        $this->information = new Information($information);
        return $this;
    }
}