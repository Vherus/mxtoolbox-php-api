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
 
namespace Mxtb\Model\Lookup\Network\Tcp;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("Summary")
     * @Accessor(getter="getSummary",setter="setSummary")
     */
    private $summary;
	
    /**
     * @return string|null
     */
    public function getSummary() : string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     * @return InformationResponse
     */
    public function setSummary(string $summary) : InformationResponse
    {
        $this->summary = $summary;
        return $this;
    }
}