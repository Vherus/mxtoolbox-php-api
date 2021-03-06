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

namespace Mxtb\Model\Lookup\Network;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class TranscriptResponse
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("Transcript")
     * @Accessor(getter="getTranscript",setter="setTranscript")
     */
    private $transcript;
	
    /**
     * @return string|null
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * @param string|null $transcript
     * @return TranscriptResponse
     */
    public function setTranscript(string $transcript = null) : TranscriptResponse
    {
        $this->transcript = $transcript;
        return $this;
    }
}