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
use Mxtb\Model\Lookup\RelatedLookups;
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
     * @Type("array<RelatedLookups>")
     * @SerializedName("RelatedLookups")
     * @Accessor(getter="getRelatedLookups",setter="setRelatedLookups")
     */
    protected $relatedLookups;

    /**
     * @Type("array<TimeoutResponse>")
     * @SerializedName("Timeouts")
     * @Accessor(getter="getTimeouts",setter="setTimeouts")
     */
    protected $timeouts;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     * @return AbstractLookup
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param mixed $command
     * @return AbstractLookup
     */
    public function setCommand($command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsTransitioned()
    {
        return $this->isTransitioned;
    }

    /**
     * @param mixed $isTransitioned
     * @return AbstractLookup
     */
    public function setIsTransitioned($isTransitioned)
    {
        $this->isTransitioned = $isTransitioned;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommandArgument()
    {
        return $this->commandArgument;
    }

    /**
     * @param string $commandArgument
     * @return AbstractLookup
     */
    public function setCommandArgument($commandArgument)
    {
        $this->commandArgument = $commandArgument;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeRecorded()
    {
        return $this->timeRecorded;
    }

    /**
     * @param string $timeRecorded
     * @return AbstractLookup
     */
    public function setTimeRecorded($timeRecorded)
    {
        $this->timeRecorded = $timeRecorded;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReportingNameServer()
    {
        return $this->reportingNameServer;
    }

    /**
     * @param null|string $reportingNameServer
     * @return AbstractLookup
     */
    public function setReportingNameServer($reportingNameServer)
    {
        $this->reportingNameServer = $reportingNameServer;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeToComplete()
    {
        return $this->timeToComplete;
    }

    /**
     * @param string $timeToComplete
     * @return AbstractLookup
     */
    public function setTimeToComplete($timeToComplete)
    {
        $this->timeToComplete = $timeToComplete;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedIP()
    {
        return $this->relatedIP;
    }

    /**
     * @param string $relatedIP
     * @return AbstractLookup
     */
    public function setRelatedIP($relatedIP)
    {
        $this->relatedIP = $relatedIP;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsEndpoint()
    {
        return $this->isEndpoint;
    }

    /**
     * @param boolean $isEndpoint
     * @return AbstractLookup
     */
    public function setIsEndpoint($isEndpoint)
    {
        $this->isEndpoint = $isEndpoint;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isHasSubscriptions()
    {
        return $this->hasSubscriptions;
    }

    /**
     * @param boolean $hasSubscriptions
     * @return AbstractLookup
     */
    public function setHasSubscriptions($hasSubscriptions)
    {
        $this->hasSubscriptions = $hasSubscriptions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsBruteForce()
    {
        return $this->isBruteForce;
    }

    /**
     * @param boolean $isBruteForce
     * @return AbstractLookup
     */
    public function setIsBruteForce($isBruteForce)
    {
        $this->isBruteForce = $isBruteForce;
        return $this;
    }

    /**
     * @return int
     */
    public function getMxRep()
    {
        return $this->mxRep;
    }

    /**
     * @param int $mxRep
     * @return AbstractLookup
     */
    public function setMxRep($mxRep)
    {
        $this->mxRep = $mxRep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailServiceProvider()
    {
        return $this->emailServiceProvider;
    }

    /**
     * @param mixed $emailServiceProvider
     * @return AbstractLookup
     */
    public function setEmailServiceProvider($emailServiceProvider)
    {
        $this->emailServiceProvider = $emailServiceProvider;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelatedLookups()
    {
        return $this->relatedLookups;
    }

    /**
     * @param mixed $relatedLookups
     * @return AbstractLookup
     */
    public function setRelatedLookups($relatedLookups)
    {
        $this->relatedLookups = $relatedLookups;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeouts()
    {
        return $this->timeouts;
    }

    /**
     * @param mixed $relatedLookups
     * @return AbstractLookup
     */
    public function setTimeouts($timeouts)
    {
        $this->timeouts = $timeouts;
        return $this;
    }
}