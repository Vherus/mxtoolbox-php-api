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

class ActionResponse
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("ActionString")
     * @Accessor(getter="getActionString",setter="setActionString")
     */
    private $actionString;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Command")
     * @Accessor(getter="getCommand",setter="setCommand")
     */
    private $command;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Address")
     * @Accessor(getter="getAddress",setter="setAddress")
     */
    private $address;

    /**
     * @var bool
     *
     * @Type("boolean")
     * @SerializedName("IsAll")
     * @Accessor(getter="getIsAll",setter="setIsAll")
     */
    private $isAll;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("Threshold")
     * @Accessor(getter="getThreshold",setter="setThreshold")
     */
    private $threshold;

    /**
     * @var bool
     *
     * @Type("boolean")
     * @SerializedName("AllowPrivateIP")
     * @Accessor(getter="getAllowPrivateIP",setter="setAllowPrivateIP")
     */
    private $allowPrivateIP;

    /**
     * @var bool
     *
     * @Type("boolean")
     * @SerializedName("IsMonitorable")
     * @Accessor(getter="getIsMonitorable",setter="setIsMonitorable")
     */
    private $isMonitorable;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("LarArgument")
     * @Accessor(getter="getLarArgument",setter="setLarArgument")
     */
    private $larArgument;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("HttpRegex")
     * @Accessor(getter="getHttpRegex",setter="setHttpRegex")
     */
    private $httpRegex;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("TcpPort")
     * @Accessor(getter="getTcpPort",setter="setTcpPort")
     */
    private $tcpPort;

    /**
     * @var int
     *
     * @Type("integer")
     * @SerializedName("SmtpPort")
     * @Accessor(getter="getSmtpPort",setter="setSmtpPort")
     */
    private $smtpPort;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("MailflowIp")
     * @Accessor(getter="getMailflowIp",setter="setMailflowIp")
     */
    private $mailflowIp;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("SpecialServer")
     * @Accessor(getter="getSpecialServer",setter="setSpecialServer")
     */
    private $specialServer;

    /**
     * @var string[]
     *
     * @Type("array<string>")
     * @SerializedName("CommandParts")
     * @Accessor(getter="getCommandParts",setter="setCommandParts")
     */
    private $commandParts;
	
    /**
     * @return string|null
     */
    public function getActionString()
    {
        return $this->actionString;
    }

    /**
     * @param string|null $actionString
     * @return ActionResponse
     */
    public function setActionString(string $actionString = null) : ActionResponse
    {
        $this->actionString = $actionString;
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
     * @return ActionResponse
     */
    public function setCommand(string $command = null) : ActionResponse
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return ActionResponse
     */
    public function setAddress(string $address = null) : ActionResponse
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAll()
    {
        return $this->isAll;
    }

    /**
     * @param bool $isAll
     * @return ActionResponse
     */
    public function setIsAll(bool $isAll) : ActionResponse
    {
        $this->isAll = $isAll;
        return $this;
    }

    /**
     * @return int
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @param int $threshold
     * @return ActionResponse
     */
    public function setThreshold(int $threshold) : ActionResponse
    {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowPrivateIP()
    {
        return $this->allowPrivateIP;
    }

    /**
     * @param bool $allowPrivateIP
     * @return ActionResponse
     */
    public function setAllowPrivateIP(bool $allowPrivateIP) : ActionResponse
    {
        $this->allowPrivateIP = $allowPrivateIP;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMonitorable()
    {
        return $this->isMonitorable;
    }

    /**
     * @param bool $isMonitorable
     * @return ActionResponse
     */
    public function setIsMonitorable(bool $isMonitorable) : ActionResponse
    {
        $this->isMonitorable = $isMonitorable;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getLarArgument()
    {
        return $this->larArgument;
    }

    /**
     * @param string|null $larArgument
     * @return ActionResponse
     */
    public function setLarArgument(string $larArgument = null) : ActionResponse
    {
        $this->larArgument = $larArgument;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getHttpRegex()
    {
        return $this->httpRegex;
    }

    /**
     * @param string|null $httpRegex
     * @return ActionResponse
     */
    public function setHttpRegex(string $httpRegex = null) : ActionResponse
    {
        $this->httpRegex = $httpRegex;
        return $this;
    }

    /**
     * @return int
     */
    public function getTcpPort()
    {
        return $this->tcpPort;
    }

    /**
     * @param int $tcpPort
     * @return ActionResponse
     */
    public function setTcpPort(int $tcpPort) : ActionResponse
    {
        $this->tcpPort = $tcpPort;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmtpPort()
    {
        return $this->smtpPort;
    }

    /**
     * @param int $smtpPort
     * @return ActionResponse
     */
    public function setSmtpPort(int $smtpPort) : ActionResponse
    {
        $this->smtpPort = $smtpPort;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getMailflowIp()
    {
        return $this->mailflowIp;
    }

    /**
     * @param string|null $mailflowIp
     * @return ActionResponse
     */
    public function setMailflowIp(string $mailflowIp = null) : ActionResponse
    {
        $this->mailflowIp = $mailflowIp;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getSpecialServer()
    {
        return $this->specialServer;
    }

    /**
     * @param string|null $specialServer
     * @return ActionResponse
     */
    public function setSpecialServer(string $specialServer = null) : ActionResponse
    {
        $this->specialServer = $specialServer;
        return $this;
    }
	
    /**
     * @return string[]|null
     */
    public function getCommandParts()
    {
        return $this->commandParts;
    }

    /**
     * @param string[]|null $commandParts
     * @return ActionResponse
     */
    public function setCommandParts(array $commandParts = null) : ActionResponse
    {
        $this->commandParts = $commandParts;
        return $this;
    }
}