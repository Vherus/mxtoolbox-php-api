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

namespace Mxtb\Model\Lookup\Network;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Lookup\Network\Tcp\PassedResponse;
use Mxtb\Model\Lookup\Network\Tcp\InformationResponse;
use Mxtb\Model\Collection\Passed;
use Mxtb\Model\Collection\Information;

class Tcp extends AbstractNetworkLookup
{
    /**
     * @var Passed
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Tcp\PassedResponse>")
     * @SerializedName("Passed")
     * @Accessor(getter="getPassed",setter="setPassed")
     */
    private $passed;

    /**
     * @var Information
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Tcp\InformationResponse>")
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
     * @return Tcp
     */
    public function setPassed(array $passed = null) : Tcp
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
     * @return Tcp
     */
    public function setInformation(array $information = null) : Tcp
    {
        $this->information = new Information($information);
        return $this;
    }
}