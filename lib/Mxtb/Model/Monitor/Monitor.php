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

namespace Mxtb\Model\Monitor;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Monitor\ActionResponse;

class Monitor
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("MonitorUID")
     * @Accessor(getter="getMonitorUid",setter="setMonitorUid")
     */
    private $monitorUid;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("ActionString")
     * @Accessor(getter="getActionString",setter="setActionString")
     */
    private $actionString;
	
    /**
     * @var ActionResponse
     *
     * @Type("Mxtb\Model\Monitor\ActionResponse")
     * @SerializedName("Action")
     * @Accessor(getter="getAction",setter="setAction")
     */
    private $action;
	
    /**
     * @var \DateTime
     *
     * @Type("string")
     * @SerializedName("LastTransition")
     * @Accessor(getter="getLastTransition",setter="setLastTransition")
     */
    private $lastTransition;
	
    /**
     * @var \DateTime
     *
     * @Type("string")
     * @SerializedName("LastChecked")
     * @Accessor(getter="getLastChecked",setter="setLastChecked")
     */
    private $lastChecked;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("MxRep")
     * @Accessor(getter="getMxRep",setter="setMxRep")
     */
    private $mxRep;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("HistoryUrl")
     * @Accessor(getter="getHistoryUrl",setter="setHistoryUrl")
     */
    private $historyUrl;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Name")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("TimeElapsed")
     * @Accessor(getter="getTimeElapsed",setter="setTimeElapsed")
     */
    private $timeElapsed;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("RecordCount")
     * @Accessor(getter="getRecordCount",setter="setRecordCount")
     */
    private $recordCount;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("LarUID")
     * @Accessor(getter="getLarUid",setter="setLarUid")
     */
    private $larUid;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("FrequencyInMinutes")
     * @Accessor(getter="getFrequencyInMinutes",setter="setFrequencyInMinutes")
     */
    private $frequencyInMinutes;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("CurrentStatus")
     * @Accessor(getter="getCurrentStatus",setter="setCurrentStatus")
     */
    private $currentStatus;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("ExpiresIn")
     * @Accessor(getter="getExpiresIn",setter="setExpiresIn")
     */
    private $expiresIn;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("ExpirationInHours")
     * @Accessor(getter="getExpirationInHours",setter="setExpirationInHours")
     */
    private $expirationInHours;

    /**
     * @var bool
     *
     * @Type("boolean")
     * @SerializedName("IsActive")
     * @Accessor(getter="getIsActive",setter="setIsActive")
     */
    private $isActive;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("DomainSubscription")
     * @Accessor(getter="getDomainSubscription",setter="setDomainSubscription")
     */
    private $domainSubscription;

    /**
     * @var string[]
     *
     * @Type("array<string>")
     * @SerializedName("Tags")
     * @Accessor(getter="getTags",setter="setTags")
     */
    private $tags;

    /**
     * @var string[]
     *
     * @Type("array<Mxtb\Model\Monitor\Response\Fail>")
     * @SerializedName("Failing")
     * @Accessor(getter="getFailing",setter="setFailing")
     */
    private $failing;

    /**
     * @var string[]
     *
     * @Type("array<Mxtb\Model\Monitor\Response\Warning>")
     * @SerializedName("Warnings")
     * @Accessor(getter="getWarnings",setter="setWarnings")
     */
    private $warnings;
	
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("StatusSummary")
     * @Accessor(getter="getStatusSummary",setter="setStatusSummary")
     */
    private $statusSummary;
	
    /**
     * @return string|null
     */
    public function getMonitorUid()
    {
        return $this->monitorUid;
    }

    /**
     * @param string|null $monitorUid
     * @return Monitor
     */
    public function setMonitorUid(string $monitorUid = null) : Monitor
    {
        $this->monitorUid = $monitorUid;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getActionString()
    {
        return $this->actionString;
    }

    /**
     * @param string|null $actionString
     * @return Monitor
     */
    public function setActionString(string $actionString = null) : Monitor
    {
        $this->actionString = $actionString;
        return $this;
    }
	
    /**
     * @return ActionResponse|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param ActionResponse|null $action
     * @return Monitor
     */
    public function setAction(ActionResponse $action = null) : Monitor
    {
        $this->action = $action;
        return $this;
    }
	
    /**
     * @return \DateTime|null
     */
    public function getLastTransition()
    {
        return $this->lastTransition;
    }

    /**
     * @param string|null $lastTransition
     * @return Monitor
     */
    public function setLastTransition(string $lastTransition = null) : Monitor
    {
        $this->lastTransition = new \DateTime($lastTransition);
        return $this;
    }
	
    /**
     * @return \DateTime|null
     */
    public function getLastChecked()
    {
        return $this->lastChecked;
    }

    /**
     * @param string|null $lastChecked
     * @return Monitor
     */
    public function setLastChecked(string $lastChecked = null) : Monitor
    {
        $this->lastChecked = new \DateTime($lastChecked);
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getMxRep()
    {
        return $this->mxRep;
    }

    /**
     * @param string|null $mxRep
     * @return Monitor
     */
    public function setMxRep(string $mxRep = null) : Monitor
    {
        $this->mxRep = $mxRep;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getHistoryUrl()
    {
        return $this->historyUrl;
    }

    /**
     * @param string|null $historyUrl
     * @return Monitor
     */
    public function setHistoryUrl(string $historyUrl = null) : Monitor
    {
        $this->historyUrl = $historyUrl;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Monitor
     */
    public function setName(string $name = null) : Monitor
    {
        $this->name = $name;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getTimeElapsed()
    {
        return $this->timeElapsed;
    }

    /**
     * @param string|null $timeElapsed
     * @return Monitor
     */
    public function setTimeElapsed(string $timeElapsed = null) : Monitor
    {
        $this->timeElapsed = $timeElapsed;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecordCount()
    {
        return $this->recordCount;
    }

    /**
     * @param int $recordCount
     * @return Monitor
     */
    public function setRecordCount(int $recordCount) : Monitor
    {
        $this->recordCount = $recordCount;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getLarUid()
    {
        return $this->larUid;
    }

    /**
     * @param string|null $larUid
     * @return Monitor
     */
    public function setLarUid(string $larUid = null) : Monitor
    {
        $this->larUid = $larUid;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyInMinutes()
    {
        return $this->frequencyInMinutes;
    }

    /**
     * @param int $frequencyInMinutes
     * @return Monitor
     */
    public function setFrequencyInMinutes(int $frequencyInMinutes) : Monitor
    {
        $this->frequencyInMinutes = $frequencyInMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param int $currentStatus
     * @return Monitor
     */
    public function setCurrentStatus(int $currentStatus) : Monitor
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param string|null $expiresIn
     * @return Monitor
     */
    public function setExpiresIn(string $expiresIn = null) : Monitor
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationInHours()
    {
        return $this->expirationInHours;
    }

    /**
     * @param int $expirationInHours
     * @return Monitor
     */
    public function setExpirationInHours(int $expirationInHours) : Monitor
    {
        $this->expirationInHours = $expirationInHours;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return Monitor
     */
    public function setIsActive(bool $isActive) : Monitor
    {
        $this->isActive = $isActive;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getDomainSubscription()
    {
        return $this->domainSubscription;
    }

    /**
     * @param string|null $domainSubscription
     * @return Monitor
     */
    public function setDomainSubscription(string $domainSubscription = null) : Monitor
    {
        $this->domainSubscription = $domainSubscription;
        return $this;
    }
	
    /**
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string[]|null $tags
     * @return Monitor
     */
    public function setTags(array $tags = null) : Monitor
    {
        $this->tags = $tags;
        return $this;
    }
	
    /**
     * @return string[]|null
     */
    public function getFailing()
    {
        return $this->failing;
    }

    /**
     * @param string[]|null $failing
     * @return Monitor
     */
    public function setFailing(array $failing = null) : Monitor
    {
        $this->failing = $failing;
        return $this;
    }
	
    /**
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     * @return Monitor
     */
    public function setWarnings(array $warnings = null) : Monitor
    {
        $this->warnings = $warnings;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getStatusSummary()
    {
        return $this->statusSummary;
    }

    /**
     * @param string|null $statusSummary
     * @return Monitor
     */
    public function setStatusSummary(string $statusSummary = null) : Monitor
    {
        $this->statusSummary = $statusSummary;
        return $this;
    }
}