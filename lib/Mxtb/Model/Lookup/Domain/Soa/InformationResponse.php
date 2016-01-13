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
 
namespace Mxtb\Model\Lookup\Domain\Soa;

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
    private $primaryNs;
	
    /**
     * @var string|null
     */
    private $responsibleEmail;
	
    /**
     * @var string|null
     */
    private $ttl;
	
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
    public function getPrimaryNS() : string
    {
        return $this->primaryNs;
    }

    /**
     * @param string|null $primaryNs
     * @return InformationResponse
     */
    public function setPrimaryNS(string $primaryNs = null) : InformationResponse
    {
        $this->primaryNs = $primaryNs;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getResponsibleEmail() : string
    {
        return $this->responsibleEmail;
    }

    /**
     * @param string|null $responsibleEmail
     * @return InformationResponse
     */
    public function setResponsibleEmail(string $responsibleEmail = null) : InformationResponse
    {
        $this->responsibleEmail = $responsibleEmail;
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
}