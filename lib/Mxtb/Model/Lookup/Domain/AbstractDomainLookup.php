<?php declare(strict_types=1);

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
use Mxtb\Model\Collection\Transcript;

abstract class AbstractDomainLookup extends AbstractLookup
{
    /**
     * @var Transcript
     *
     * @Type("array<Mxtb\Model\Lookup\Domain\TranscriptResponse>")
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
    public function setTranscript(array $transcript = null) : AbstractDomainLookup
    {
        $this->transcript = new Transcript($transcript);
        return $this;
    }
}