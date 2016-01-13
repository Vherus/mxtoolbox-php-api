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
namespace Mxtb\Model\Lookup\Network;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Collection\Failed;
use Mxtb\Model\Collection\Information;
use Mxtb\Model\Collection\Passed;
use Mxtb\Model\Lookup\Network\Blacklist\FailedResponse;
use Mxtb\Model\Lookup\Network\Blacklist\PassedResponse;
use Mxtb\Model\Lookup\Network\Blacklist\InformationResponse;
class Blacklist extends AbstractNetworkLookup
{
    /**
     * @var Failed
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Blacklist\FailedResponse>")
     * @SerializedName("Failed")
     * @Accessor(getter="getFailed",setter="setFailed")
     */
    private $failed;
    /**
     * @var Passed
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Blacklist\PassedResponse>")
     * @SerializedName("Passed")
     * @Accessor(getter="getPassed",setter="setPassed")
     */
    private $passed;
    /**
     * @var Information
     *
     * @Type("array<Mxtb\Model\Lookup\Network\Blacklist\InformationResponse>")
     * @SerializedName("Passed")
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
     * @return Blacklist
     */
    public function setFailed(array $failed = null) : Blacklist
    {
        $this->failed = new Failed($failed);
        return $this;
    }
    /**
     * @return Passed|null
     */
    public function getPassed()
    {
        return $this->passed;
    }
    /**
     * @param PassedResponse[]|null $passed
     * @return Blacklist
     */
    public function setPassed(array $passed = null) : Blacklist
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
     * @return Blacklist
     */
    public function setInformation(array $information = null) : Blacklist
    {
        $this->information = new Information($information);
        return $this;
    }
}