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
 
namespace Mxtb\Model\Lookup\Domain\Dns;

use Mxtb\Model\Lookup\AbstractResponse;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

/**
 * TODO Needs work. $additionalInfo should be a collection.
 */
abstract class AbstractDNSResponse extends AbstractResponse
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Info")
     * @Accessor(getter="getInfo",setter="setInfo")
     */
    protected $info;
	
    /**
     * @var string[]
     */
    protected $additionalInfo = [];
	
    /**
     * @return string|null
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string|null $info
     * @return AbstractDNSResponse
     */
    public function setInfo(string $info = null) : AbstractDNSResponse
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
     * @param int|null $key
     * @return string
     */
    public function getAdditionalInfo(int $key = null) : string
    {
        return $this->additionalInfo[$key];
    }

    /**
     * @param array|null $additionalInfo
     * @return AbstractDNSResponse
     */
    public function setAdditionalInfo(array $additionalInfo = []) : AbstractDNSResponse
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}