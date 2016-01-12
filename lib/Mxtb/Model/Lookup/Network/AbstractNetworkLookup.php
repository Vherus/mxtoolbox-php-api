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

namespace Mxtb\Model\Lookup\Network;

use Mxtb\Model\Lookup\AbstractLookup;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

abstract class AbstractNetworkLookup extends AbstractLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Network\TranscriptResponse>")
     * @SerializedName("Transcript")
     * @Accessor(getter="getTranscript",setter="setTranscript")
     */
    protected $transcript;

    /**
     * @return TranscriptResponse[]|null
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param array|null $transcript
     * @return $this
     */
    public function setTranscript(array $transcript = null) : AbstractNetworkLookup
    {
        $this->transcript = $transcript;
        return $this;
    }
}