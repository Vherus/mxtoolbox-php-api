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
 
namespace Mxtb\Model\Lookup\Network\Https;

class InformationResponse
{
    /**
     * @var string
     */
    private $icon;
	
    /**
     * @var string
     */
    private $status;
	
    /**
     * @var string
     */
    private $name;
	
    /**
     * @var string
     */
    private $serial;
	
    /**
     * @var string
     */
    private $algorithm;
	
    /**
     * @var string
     */
    private $validFrom;
	
    /**
     * @var string
     */
    private $validTo;
	
    /**
     * @var string
     */
    private $empires;
	
    /**
     * @var string
     */
    private $subject;
	
    /**
     * @var string
     */
    private $subjectData;
	
    /**
     * @var string
     */
    private $primary;
	
    /**
     * @var string
     */
    private $issuer;
	
    /**
     * @return string|null
     */
    public function getIcon() : string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     */
    public function setIcon(string $icon) : InformationResponse
    {
        $this->icon = $icon;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(string $status) : InformationResponse
    {
        $this->status = $status;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(string $name) : InformationResponse
    {
        $this->name = $name;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getSerial() : string
    {
        return $this->serial;
    }

    /**
     * @param string|null $serial
     */
    public function setSerial(string $serial) : InformationResponse
    {
        $this->serial = $serial;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getAlgorithm() : string
    {
        return $this->algorithm;
    }

    /**
     * @param string|null $algorithm
     */
    public function setAlgorithm(string $algorithm) : InformationResponse
    {
        $this->algorithm = $algorithm;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getValidFrom() : string
    {
        return $this->validFrom;
    }

    /**
     * @param string|null $validFrom
     */
    public function setValidFrom(string $validFrom) : InformationResponse
    {
        $this->validFrom = $validFrom;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getValidTo() : string
    {
        return $this->validTo;
    }

    /**
     * @param string|null $validTo
     */
    public function setValidTo(string $validTo) : InformationResponse
    {
        $this->validTo = $validTo;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getExpires() : string
    {
        return $this->expires;
    }

    /**
     * @param string|null $expires
     */
    public function setExpires(string $expires) : InformationResponse
    {
        $this->expires = $expires;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getSubject() : string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     */
    public function setSubject(string $subject) : InformationResponse
    {
        $this->subject = $subject;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getSubjectData() : string
    {
        return $this->subjectData;
    }

    /**
     * @param string|null $subjectData
     */
    public function setSubjectData(string $subjectData) : InformationResponse
    {
        $this->subjectData = $subjectData;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getPrimary() : string
    {
        return $this->primary;
    }

    /**
     * @param string|null $primary
     */
    public function setPrimary(string $primary) : InformationResponse
    {
        $this->primary = $primary;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getIssuer() : string
    {
        return $this->issuer;
    }

    /**
     * @param string|null $issuer
     */
    public function setIssuer(string $issuer) : InformationResponse
    {
        $this->issuer = $issuer;
        return $this;
    }
}