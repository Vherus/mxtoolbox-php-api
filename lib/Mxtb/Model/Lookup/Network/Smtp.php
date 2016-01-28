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
use Mxtb\Model\Lookup\Network\Smtp\FailedResponse;
use Mxtb\Model\Lookup\Network\Smtp\PassedResponse;
use Mxtb\Model\Lookup\Network\Smtp\InformationResponse;
use Mxtb\Model\Collection\Passed;
use Mxtb\Model\Collection\Failed;
use Mxtb\Model\Collection\Information;

class Smtp extends AbstractNetworkLookup
{
    /**
     * @var Failed
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Smtp\FailedResponse>")
     * @SerializedName("Failed")
     * @Accessor(getter="getFailed",setter="setFailed")
     */
    private $failed;

    /**
     * @var Information
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Smtp\InformationResponse>")
     * @SerializedName("Information")
     * @Accessor(getter="getInformation",setter="setInformation")
     */
    private $information;

    /**
     * @return Failed|null
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * @param FailedResponse[]|null $failed
     * @return Smtp
     */
    public function setFailed(array $failed = null) : Smtp
    {
        $this->failed = new Failed($failed);
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
     * @return Smtp
     */
    public function setInformation(array $information = null) : Smtp
    {
        $this->information = new Information($information);
        return $this;
    }
}