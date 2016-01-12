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

class Transcript
{
    /**
     * @Type("string")
     * @SerializedName("Transcript")
     * @Accessor(getter="getTranscript",setter="setTranscript")
     */
    private $transcript;

    /**
     * @return string
     */
    public function getTranscript() : string
    {
        return $this->transcript;
    }

    /**
     * @param string $transcript
     * @return Transcript
     */
    public function setTranscript(string $transcript) : Transcript
    {
        $this->transcript = $transcript;
        return $this;
    }
}