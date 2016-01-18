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

namespace Mxtb\Model\Lookup\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

abstract class AbstractInformationResponse
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("Type")
     * @Accessor(getter="getType",setter="setType")
     */
    protected $type;

    /**
     * @return null|string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(string $type = null) : AbstractInformationResponse
    {
        $this->type = $type;
        return $this;
    }
}