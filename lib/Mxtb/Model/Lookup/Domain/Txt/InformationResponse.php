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

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     */
    private $domainName;
	
    /**
     * @var string|null
     */
    private $ttl;
	
    /**
     * @var string|null
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
     */
    public function setDomainName(string $domainName) : InformationResponse
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
     */
    public function setTTL(string $ttl) : InformationResponse
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
     */
    public function setRecord(string $record) : InformationResponse
    {
        $this->record = $record;
        return $this;
    }
}