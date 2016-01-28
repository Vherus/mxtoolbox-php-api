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

namespace Mxtb\Model\Lookup;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Repository\Lookup\DomainRepository as Domain;
use Mxtb\Repository\Lookup\NetworkRepository as Network;
use Mxtb\MxToolbox;

class RelatedLookup
{
    /**
     * @Type("string")
     * @SerializedName("Name")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @Type("string")
     * @SerializedName("URL")
     * @Accessor(getter="getUrl",setter="setUrl")
     */
    private $url;

    /**
     * @Type("string")
     * @SerializedName("Command")
     * @Accessor(getter="getCommand",setter="setCommand")
     */
    private $command;

    /**
     * @Type("string")
     * @SerializedName("CommandArgument")
     * @Accessor(getter="getCommandArgument",setter="setCommandArgument")
     */
    private $commandArgument;

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return RelatedLookup
     */
    public function setName(string $name = null) : RelatedLookup
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return RelatedLookup
     */
    public function setUrl(string $url = null) : RelatedLookup
    {
        $this->url = $url;
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
     * @return RelatedLookup
     */
    public function setCommand(string $command = null) : RelatedLookup
    {
        $this->command = $command;
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
     * @return RelatedLookup
     */
    public function setCommandArgument(string $commandArgument = null) : RelatedLookup
    {
        $this->commandArgument = $commandArgument;
        return $this;
    }
	
	
    /**
     * @param MxToolbox $mxtb
     * @return mixed|null
     */
    public function getLookup(MxToolbox $mxtb)
    {
		$shrapnel = explode("/", $this->url);
		$domain = end($shrapnel);
		
		switch($this->command)
		{
			case 'mx':
				$repository = new Domain($mxtb);
				return $repository->getMx($domain);
			case 'a':
				$repository = new Domain($mxtb);
				return $repository->getA($domain);
			case 'dns':
				$repository = new Domain($mxtb);
				return $repository->getDns($domain);
			case 'spf':
				$repository = new Domain($mxtb);
				return $repository->getSpf($domain);
			case 'txt':
				$repository = new Domain($mxtb);
				return $repository->getTxt($domain);
			case 'soa':
				$repository = new Domain($mxtb);
				return $repository->getSoa($domain);
			case 'blacklist':
				$repository = new Network($mxtb);
				return $repository->getBlacklist($domain);
			case 'smtp':
				$repository = new Network($mxtb);
				return $repository->getSmtp($domain);
			case 'tcp':
				$repository = new Network($mxtb);
				return $repository->getTcp($domain);
			case 'http':
				$repository = new Network($mxtb);
				return $repository->getHttp($domain);
			case 'https':
				$repository = new Network($mxtb);
				return $repository->getHttps($domain);
			case 'ping':
				$repository = new Network($mxtb);
				return $repository->getPing($domain);
			case 'trace':
				$repository = new Network($mxtb);
				return $repository->getTrace($domain);
			default:
				return null;
		}
    }
}