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
 
namespace Mxtb\Model\Lookup\Domain\Txt;

use Mxtb\Model\Lookup\Domain\AbstractInformationResponse;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     * @var string|null
     * @Type("string")
     * @SerializedName("DomainName")
     * @Accessor(getter="getDomainName",setter="setDomainName")
     */
    private $domainName;
	
    /**
     * @var string|null
     * @var string|null
     * @Type("string")
     * @SerializedName("TTL")
     * @Accessor(getter="getTTL",setter="setTTL")
     */
    private $ttl;
	
    /**
     * @var string|null
     * @var string|null
     * @Type("string")
     * @SerializedName("Record")
     * @Accessor(getter="getRecord",setter="setRecord")
     */
    private $record;
	
    /**
     * @return string|null
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }

    /**
     * @param string|null $domainName
     * @return InformationResponse
     */
    public function setDomainName(string $domainName = null) : InformationResponse
    {
        $this->domainName = $domainName;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getTTL() : string
    {
        return $this->ttl;
    }

    /**
     * @param string|null $ttl
     * @return InformationResponse
     */
    public function setTTL(string $ttl = null) : InformationResponse
    {
        $this->ttl = $ttl;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getRecord() : string
    {
        return $this->record;
    }

    /**
     * @param string|null $record
     * @return InformationResponse
     */
    public function setRecord(string $record = null) : InformationResponse
    {
        $this->record = $record;
        return $this;
    }
}