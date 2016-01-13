<?php

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

use Mxtb\Model\Lookup\AbstractLookup;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

abstract class AbstractDomainLookup extends AbstractLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Domain\TranscriptResponse>")
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
    public function setTranscript(array $transcript = null) : AbstractDomainLookup
    {
        $this->transcript = $transcript;
        return $this;
    }
}