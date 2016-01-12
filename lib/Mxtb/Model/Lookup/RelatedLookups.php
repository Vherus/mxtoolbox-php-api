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

class RelatedLookups
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
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RelatedLookups
     */
    public function setName(string $name) : RelatedLookups
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return RelatedLookups
     */
    public function setUrl(string $url) : RelatedLookups
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommand() : string
    {
        return $this->command;
    }

    /**
     * @param string $command
     * @return RelatedLookups
     */
    public function setCommand(string $command) : RelatedLookups
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommandArgument() : string
    {
        return $this->commandArgument;
    }

    /**
     * @param string $commandArgument
     * @return RelatedLookups
     */
    public function setCommandArgument(string $commandArgument) : RelatedLookups
    {
        $this->commandArgument = $commandArgument;
        return $this;
    }
}