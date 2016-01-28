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

use Mxtb\Model\Common\AbstractResponse;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class TransitionedSubaction extends AbstractResponse
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Info")
     * @Accessor(getter="getInfo",setter="setInfo")
     */
    private $info;

    /**
     * @return string
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return TransitionedSubaction
     */
    public function setInfo($info) : TransitionedSubaction
    {
        $this->info = $info;
        return $this;
    }
}