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

abstract class AbstractResponse
{
    /**
     * @Type("integer")
     * @SerializedName("ID")
     * @Accessor(getter="getId",setter="setId")
     */
    protected $id;

    /**
     * @Type("string")
     * @SerializedName("Name")
     * @Accessor(getter="getName",setter="setName")
     */
    protected $name;

    /**
     * @Type("string")
     * @SerializedName("Url")
     * @Accessor(getter="getUrl",setter="setUrl")
     */
    protected $url;

    /**
     * @Type("string")
     * @SerializedName("DelistUrl")
     * @Accessor(getter="getDelistUrl",setter="setDelistUrl")
     */
    protected $delistUrl;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(int $id = null) : AbstractResponse
    {
        $this->id = $id;
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
     */
    public function setName(string $name = null) : AbstractResponse
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
     */
    public function setUrl(string $url = null) : AbstractResponse
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelistUrl()
    {
        return $this->delistUrl;
    }

    /**
     * @param string|null $delistUrl
     */
    public function setDelistUrl(string $delistUrl = null) : AbstractResponse
    {
        $this->delistUrl = $delistUrl;
        return $this;
    }
}