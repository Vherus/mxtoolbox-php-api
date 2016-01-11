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

class Lookup
{
    /**
     * @Type("string")
     * @SerializedName("UID")
     * @Accessor(getter="getUid",setter="setUid")
     */
    private $uid;

    /**
     * @Type("string")
     * @SerializedName("Command")
     * @Accessor(getter="getCommand",setter="setCommand")
     */
    private $command;

    /**
     * @Type("boolean")
     * @SerializedName("IsTransitioned")
     * @Accessor(getter="getIsTransitioned",setter="setIsTransitioned")
     */
    private $isTransitioned;

    /**
     * @Type("string")
     * @SerializedName("CommandArgument")
     * @Accessor(getter="getCommandArgument",setter="setCommandArgument")
     */
    private $commandArgument;

    /**
     * @Type("string")
     * @SerializedName("TimeRecorded")
     * @Accessor(getter="getTimeRecorded",setter="setTimeRecorded")
     */
    private $timeRecorded;

    /**
     * @Type("string")
     * @SerializedName("ReportingNameServer")
     * @Accessor(getter="getReportingNameServer",setter="setReportingNameServer")
     */
    private $reportingNameServer;

    /**
     * @Type("string")
     * @SerializedName("TimeToComplete")
     * @Accessor(getter="getTimeToComplete",setter="setTimeToComplete")
     */
    private $timeToComplete;

    /**
     * @Type("string")
     * @SerializedName("RelatedIP")
     * @Accessor(getter="getRelatedIp",setter="setRelatedIp")
     */
    private $relatedIP;

    /**
     * @Type("boolean")
     * @SerializedName("IsEndpoint")
     * @Accessor(getter="getIsEndpoint",setter="setIsEndpoint")
     */
    private $isEndpoint;

    /**
     * @Type("boolean")
     * @SerializedName("HasSubscriptions")
     * @Accessor(getter="getHasSubscriptions",setter="setHasSubscriptions")
     */
    private $hasSubscriptions;

    /**
     * @Type("array<Mxtb\Model\Lookup\Blacklist\FailedResponse>")
     * @SerializedName("Failed")
     * @Accessor(getter="getFailed",setter="setFailed")
     */
    private $failed;

    /**
     * @var AbstractResponse[]
     */
    private $warnings;

    /**
     * @var AbstractResponse[]
     */
    private $passed;

    private $errors;

    private $information;

    private $multiInformation;

    /**
     * @var bool
     */
    private $isBruteForce;

    private $transcript;

    /**
     * @var int
     */
    private $mxRep;

    private $emailServiceProvider;

    private $relatedLookups;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
     */
    public function setHasSubscriptions($hasSubscriptions)
    {
        $this->hasSubscriptions = $hasSubscriptions;
        return $this;
    }

    /**
     * @return AbstractResponse[]
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * @param AbstractResponse[] $failed
     * @return Lookup
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
        return $this;
    }

    /**
     * @return AbstractResponse[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param AbstractResponse[] $warnings
     * @return Lookup
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * @return AbstractResponse[]
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * @param AbstractResponse[] $passed
     * @return Lookup
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param mixed $errors
     * @return Lookup
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     * @return Lookup
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultiInformation()
    {
        return $this->multiInformation;
    }

    /**
     * @param mixed $multiInformation
     * @return Lookup
     */
    public function setMultiInformation($multiInformation)
    {
        $this->multiInformation = $multiInformation;
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
     * @return Lookup
     */
    public function setIsBruteForce($isBruteForce)
    {
        $this->isBruteForce = $isBruteForce;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param mixed $transcript
     * @return Lookup
     */
    public function setTranscript($transcript)
    {
        $this->transcript = $transcript;
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
     * @return Lookup
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
     * @return Lookup
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
     * @return Lookup
     */
    public function setRelatedLookups($relatedLookups)
    {
        $this->relatedLookups = $relatedLookups;
        return $this;
    }
}