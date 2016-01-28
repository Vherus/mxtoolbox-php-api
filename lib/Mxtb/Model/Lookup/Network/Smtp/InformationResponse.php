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
 
namespace Mxtb\Model\Lookup\Network\Smtp;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("Banner")
     * @Accessor(getter="getBanner",setter="setBanner")
     */
    private $banner;
	
    /**
     * @return string|null
     */
    public function getBanner() : string
    {
        return $this->banner;
    }

    /**
     * @param string|null $banner
     * @return InformationResponse
     */
    public function setBanner(string $banner) : InformationResponse
    {
        $this->banner = $banner;
        return $this;
    }
}