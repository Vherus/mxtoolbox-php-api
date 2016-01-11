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
 
namespace Mxtb\Model\Lookup\Dns;

use Mxtb\Model\Lookup\AbstractResponse;

class AbstractDNSResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $info;
	
    /**
     * @var string
     */
    private $additionalInfo = [];
	
    /**
     * @return string|null
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string|null $info
     */
    public function setInfo(string $info) : AbstractDNSResponse
    {
        $this->info = $info;
        return $this;
    }
	
    /**
     * @return array|null
     */
    public function getAdditionalInfoArray() : array
    {
        return $this->additionalInfo;
    }
	
    /**
     * @return string|null
     */
    public function getAdditionalInfo(string $key) : string
    {
        return $this->additionalInfo[$key];
    }

    /**
     * @param string|null $additionalInfo
     */
    public function setAdditionalInfo(string $key, string $info) : AbstractDNSResponse
    {
        $this->additionalInfo[$key] = $info;
        return $this;
    }
}