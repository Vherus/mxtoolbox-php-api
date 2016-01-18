<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Model\Lookup;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Collection\RelatedLookup as RelatedLookupCollection;
use Mxtb\Model\Collection\Timeout;
use Mxtb\Model\Lookup\RelatedLookup;
use Mxtb\Model\Lookup\TimeoutResponse;

abstract class AbstractLookup
{
    /**
     * @Type("string")
     * @SerializedName("UID")
     * @Accessor(getter="getUid",setter="setUid")
     */
    protected $uid;

    /**
     * @Type("string")
     * @SerializedName("Command")
     * @Accessor(getter="getCommand",setter="setCommand")
     */
    protected $command;

    /**
     * @Type("boolean")
     * @SerializedName("IsTransitioned")
     * @Accessor(getter="getIsTransitioned",setter="setIsTransitioned")
     */
    protected $isTransitioned;

    /**
     * @Type("string")
     * @SerializedName("CommandArgument")
     * @Accessor(getter="getCommandArgument",setter="setCommandArgument")
     */
    protected $commandArgument;

    /**
     * @var \DateTime
     * @Type("string")
     * @SerializedName("TimeRecorded")
     * @Accessor(getter="getTimeRecorded",setter="setTimeRecorded")
     */
    protected $timeRecorded;

    /**
     * @Type("string")
     * @SerializedName("ReportingNameServer")
     * @Accessor(getter="getReportingNameServer",setter="setReportingNameServer")
     */
    protected $reportingNameServer;

    /**
     * @Type("string")
     * @SerializedName("TimeToComplete")
     * @Accessor(getter="getTimeToComplete",setter="setTimeToComplete")
     */
    protected $timeToComplete;

    /**
     * @Type("string")
     * @SerializedName("RelatedIP")
     * @Accessor(getter="getRelatedIp",setter="setRelatedIp")
     */
    protected $relatedIP;

    /**
     * @Type("boolean")
     * @SerializedName("IsEndpoint")
     * @Accessor(getter="getIsEndpoint",setter="setIsEndpoint")
     */
    protected $isEndpoint;

    /**
     * @Type("boolean")
     * @SerializedName("HasSubscriptions")
     * @Accessor(getter="getHasSubscriptions",setter="setHasSubscriptions")
     */
    protected $hasSubscriptions;

    /**
     * @Type("boolean")
     * @SerializedName("IsBruteForce")
     * @Accessor(getter="getIsBruteForce",setter="setIsBruteForce")
     */
    protected $isBruteForce;

    /**
     * @Type("integer")
     * @SerializedName("MxRep")
     * @Accessor(getter="getMxRep",setter="setMxRep")
     */
    protected $mxRep;

    /**
     * @Type("string")
     * @SerializedName("EmailServiceProvider")
     * @Accessor(getter="getEmailServiceProvider",setter="setEmailServiceProvider")
     */
    protected $emailServiceProvider;

    /**
     * @var RelatedLookupCollection
     *
     * @Type("array<Mxtb\Model\Lookup\RelatedLookup>")
     * @SerializedName("RelatedLookups")
     * @Accessor(getter="getRelatedLookups",setter="setRelatedLookups")
     */
    protected $relatedLookups;

    /**
     * @var Timeout
     *
     * @Type("array<Mxtb\Model\Lookup\TimeoutResponse>")
     * @SerializedName("Timeouts")
     * @Accessor(getter="getTimeouts",setter="setTimeouts")
     */
    protected $timeouts;

    /**
     * @return string|null
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string|null $uid
     * @return AbstractLookup
     */
    public function setUid(string $uid = null) : AbstractLookup
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param string|null $command
     * @return AbstractLookup
     */
    public function setCommand(string $command = null) : AbstractLookup
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTransitioned()
    {
        return $this->isTransitioned;
    }

    /**
     * @param bool $isTransitioned
     * @return AbstractLookup
     */
    public function setIsTransitioned(bool $isTransitioned) : AbstractLookup
    {
        $this->isTransitioned = $isTransitioned;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommandArgument()
    {
        return $this->commandArgument;
    }

    /**
     * @param string|null $commandArgument
     * @return AbstractLookup
     */
    public function setCommandArgument(string $commandArgument = null) : AbstractLookup
    {
        $this->commandArgument = $commandArgument;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimeRecorded()
    {
        return $this->timeRecorded;
    }

    /**
     * @param string|null $timeRecorded
     * @return AbstractLookup
     */
    public function setTimeRecorded(string $timeRecorded = null) : AbstractLookup
    {
        $this->timeRecorded = new \DateTime($timeRecorded);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReportingNameServer()
    {
        return $this->reportingNameServer;
    }

    /**
     * @param string|null $reportingNameServer
     * @return AbstractLookup
     */
    public function setReportingNameServer(string $reportingNameServer = null) : AbstractLookup
    {
        $this->reportingNameServer = $reportingNameServer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimeToComplete()
    {
        return $this->timeToComplete;
    }

    /**
     * @param string|null $timeToComplete
     * @return AbstractLookup
     */
    public function setTimeToComplete(string $timeToComplete = null) : AbstractLookup
    {
        $this->timeToComplete = $timeToComplete;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRelatedIP()
    {
        return $this->relatedIP;
    }

    /**
     * @param string|null $relatedIP
     * @return AbstractLookup
     */
    public function setRelatedIP(string $relatedIP = null) : AbstractLookup
    {
        $this->relatedIP = $relatedIP;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEndpoint() : bool
    {
        return $this->isEndpoint;
    }

    /**
     * @param boolean $isEndpoint
     * @return AbstractLookup
     */
    public function setIsEndpoint(bool $isEndpoint) : AbstractLookup
    {
        $this->isEndpoint = $isEndpoint;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSubscriptions() : bool
    {
        return $this->hasSubscriptions;
    }

    /**
     * @param boolean $hasSubscriptions
     * @return AbstractLookup
     */
    public function setHasSubscriptions(bool $hasSubscriptions) : AbstractLookup
    {
        $this->hasSubscriptions = $hasSubscriptions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBruteForce() : bool
    {
        return $this->isBruteForce;
    }

    /**
     * @param boolean $isBruteForce
     * @return AbstractLookup
     */
    public function setIsBruteForce(bool $isBruteForce) : AbstractLookup
    {
        $this->isBruteForce = $isBruteForce;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMxRep()
    {
        return $this->mxRep;
    }

    /**
     * @param int|null $mxRep
     * @return AbstractLookup
     */
    public function setMxRep(int $mxRep = null) : AbstractLookup
    {
        $this->mxRep = $mxRep;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailServiceProvider()
    {
        return $this->emailServiceProvider;
    }

    /**
     * @param string|null $emailServiceProvider
     * @return AbstractLookup
     */
    public function setEmailServiceProvider(string $emailServiceProvider = null) : AbstractLookup
    {
        $this->emailServiceProvider = $emailServiceProvider;
        return $this;
    }

    /**
     * @return RelatedLookupCollection|null
     */
    public function getRelatedLookups()
    {
        return $this->relatedLookups;
    }

    /**
     * @param RelatedLookup[]|null $relatedLookups
     * @return AbstractLookup
     */
    public function setRelatedLookups(array $relatedLookups = null) : AbstractLookup
    {
        $this->relatedLookups = new RelatedLookupCollection($relatedLookups);
        return $this;
    }

    /**
     * @return Timeout|null
     */
    public function getTimeouts()
    {
        return $this->timeouts;
    }

    /**
     * @param TimeoutResponse[]|null $timeouts
     * @return AbstractLookup
     */
    public function setTimeouts(array $timeouts = null) : AbstractLookup
    {
        $this->timeouts = new Timeout($timeouts);
        return $this;
    }
}