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
 
namespace Mxtb\Model\Lookup\Network\Http;

use Mxtb\Model\Common\AbstractResponse;

class PassedResponse extends AbstractResponse
{
    /**
     * @Type("string")
     * @SerializedName("Info")
     * @Accessor(getter="getInfo",setter="setInfo")
     */
    private $info;
	
    /**
     * @return string|null
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string|null $info
     * @return PassedResponse
     */
    public function setInfo(string $info) : PassedResponse
    {
        $this->info = $info;
        return $this;
    }
}