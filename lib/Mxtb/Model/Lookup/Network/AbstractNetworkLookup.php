<?php declare(strict_types = 1);

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

namespace Mxtb\Model\Lookup\Network;

use Mxtb\Model\Collection\Transcript;
use Mxtb\Model\Lookup\AbstractLookup;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

abstract class AbstractNetworkLookup extends AbstractLookup
{
    /**
     * @var Transcript
     *
     * @Type("array<Mxtb\Model\Lookup\Network\TranscriptResponse>")
     * @SerializedName("Transcript")
     * @Accessor(getter="getTranscript",setter="setTranscript")
     */
    protected $transcript;

    /**
     * @return Transcript|null
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param TranscriptResponse[]|null $transcript
     * @return $this
     */
    public function setTranscript(array $transcript = null) : AbstractNetworkLookup
    {
        $this->transcript = new Transcript($transcript);
        return $this;
    }
}