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

namespace Mxtb\Model\Monitor;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class History
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Name")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("Status")
     * @Accessor(getter="getStatus",setter="setStatus")
     */
    private $status;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Result")
     * @Accessor(getter="getResult",setter="setResult")
     */
    private $result;

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
     * @SerializedName("TransitionedString")
     * @Accessor(getter="getTransitionedString",setter="setTransitionedString")
     */
    private $transitionedString;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("AlertGroupUID")
     * @Accessor(getter="getAlertGroupUid",setter="setAlertGroupUid")
     */
    private $alertGroupUid;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("LookupActionResultUID")
     * @Accessor(getter="getLookupActionResultUid",setter="setLookupActionResultUid")
     */
    private $lookupActionResultUid;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("MonitorCommand")
     * @Accessor(getter="getMonitorCommand",setter="setMonitorCommand")
     */
    private $monitorCommand;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("MonitorCommandArgument")
     * @Accessor(getter="getMonitorCommandArgument",setter="setMonitorCommandArgument")
     */
    private $monitorCommandArgument;

    /**
     * @var \DateTime
     *
     * @Type("string")
     * @SerializedName("MonitorLastChecked")
     * @Accessor(getter="getMonitorLastChecked",setter="setMonitorLastChecked")
     */
    private $monitorLastChecked;

    /**
     * @var \DateTime
     *
     * @Type("string")
     * @SerializedName("MonitorCreatedOn")
     * @Accessor(getter="getMonitorCreatedOn",setter="setMonitorCreatedOn")
     */
    private $monitorCreatedOn;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("StatusSummary")
     * @Accessor(getter="getStatusSummary",setter="setStatusSummary")
     */
    private $statusSummary;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("DomainLarUID")
     * @Accessor(getter="getDomainLarUid",setter="setDomainLarUid")
     */
    private $domainLarUid;

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
     * @SerializedName("TransitionID")
     * @Accessor(getter="getTransitionId",setter="setTransitionId")
     */
    private $transitionId;

    /**
     * @var \DateTime
     *
     * @Type("string")
     * @SerializedName("TransitionedOn")
     * @Accessor(getter="getTransitionedOn",setter="setTransitionedOn")
     */
    private $transitionedOn;

    /**
     * @var TransitionedSubaction
     *
     * @Type("Mxtb\Model\Monitor\TransitionedSubaction")
     * @SerializedName("TransitionedSubaction")
     * @Accessor(getter="getTransitionedSubaction",setter="setTransitionedSubaction")
     */
    private $transitionedSubaction;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return History
     */
    public function setName(string $name = null) : History
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return History
     */
    public function setStatus(int $status = null) : History
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return History
     */
    public function setResult(string $result = null) : History
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonitorUid() : string
    {
        return $this->monitorUid;
    }

    /**
     * @param string $monitorUid
     * @return History
     */
    public function setMonitorUid(string $monitorUid = null) : History
    {
        $this->monitorUid = $monitorUid;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransitionedString() : string
    {
        return $this->transitionedString;
    }

    /**
     * @param string $transitionedString
     * @return History
     */
    public function setTransitionedString(string $transitionedString = null) : History
    {
        $this->transitionedString = $transitionedString;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlertGroupUid() : string
    {
        return $this->alertGroupUid;
    }

    /**
     * @param string $alertGroupUid
     * @return History
     */
    public function setAlertGroupUid(string $alertGroupUid = null) : History
    {
        $this->alertGroupUid = $alertGroupUid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLookupActionResultUid() : string
    {
        return $this->lookupActionResultUid;
    }

    /**
     * @param string $lookupActionResultUid
     * @return History
     */
    public function setLookupActionResultUid(string $lookupActionResultUid = null) : History
    {
        $this->lookupActionResultUid = $lookupActionResultUid;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonitorCommand() : string
    {
        return $this->monitorCommand;
    }

    /**
     * @param string $monitorCommand
     * @return History
     */
    public function setMonitorCommand(string $monitorCommand = null) : History
    {
        $this->monitorCommand = $monitorCommand;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonitorCommandArgument() : string
    {
        return $this->monitorCommandArgument;
    }

    /**
     * @param string $monitorCommandArgument
     * @return History
     */
    public function setMonitorCommandArgument(string $monitorCommandArgument = null) : History
    {
        $this->monitorCommandArgument = $monitorCommandArgument;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMonitorLastChecked() : \DateTime
    {
        return $this->monitorLastChecked;
    }

    /**
     * @param string $monitorLastChecked
     * @return History
     */
    public function setMonitorLastChecked(string $monitorLastChecked = null) : History
    {
        $this->monitorLastChecked = new \DateTime($monitorLastChecked);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMonitorCreatedOn() : \DateTime
    {
        return $this->monitorCreatedOn;
    }

    /**
     * @param string $monitorCreatedOn
     * @return History
     */
    public function setMonitorCreatedOn(string $monitorCreatedOn = null) : History
    {
        $this->monitorCreatedOn = new \DateTime($monitorCreatedOn);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusSummary() : string
    {
        return $this->statusSummary;
    }

    /**
     * @param string $statusSummary
     * @return History
     */
    public function setStatusSummary(string $statusSummary = null) : History
    {
        $this->statusSummary = $statusSummary;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomainLarUid() : string
    {
        return $this->domainLarUid;
    }

    /**
     * @param string $domainLarUid
     * @return History
     */
    public function setDomainLarUid(string $domainLarUid = null) : History
    {
        $this->domainLarUid = $domainLarUid;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecordCount() : int
    {
        return $this->recordCount;
    }

    /**
     * @param int $recordCount
     * @return History
     */
    public function setRecordCount(int $recordCount = null) : History
    {
        $this->recordCount = $recordCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransitionId() : string
    {
        return $this->transitionId;
    }

    /**
     * @param string $transitionId
     * @return History
     */
    public function setTransitionId(string $transitionId = null) : History
    {
        $this->transitionId = $transitionId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransitionedOn() : \DateTime
    {
        return $this->transitionedOn;
    }

    /**
     * @param string $transitionedOn
     * @return History
     */
    public function setTransitionedOn(string $transitionedOn = null)
    {
        $this->transitionedOn = new \DateTime($transitionedOn);
        return $this;
    }

    /**
     * @return TransitionedSubaction
     */
    public function getTransitionedSubaction() : TransitionedSubaction
    {
        return $this->transitionedSubaction;
    }

    /**
     * @param TransitionedSubaction $transitionedSubaction
     * @return History
     */
    public function setTransitionedSubaction($transitionedSubaction)
    {
        $this->transitionedSubaction = $transitionedSubaction;
        return $this;
    }
}