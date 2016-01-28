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

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse
{
    /**
     * @Type("string")
     * @SerializedName("Icon")
     * @Accessor(getter="getIcon",setter="setIcon")
     */
    private $icon;
	
    /**
     * @Type("string")
     * @SerializedName("Status")
     * @Accessor(getter="getStatus",setter="setStatus")
     */
    private $status;
	
    /**
     * @Type("string")
     * @SerializedName("Name")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;
	
    /**
     * @Type("string")
     * @SerializedName("Serial")
     * @Accessor(getter="getSerial",setter="setSerial")
     */
    private $serial;
	
    /**
     * @Type("string")
     * @SerializedName("Algorithm")
     * @Accessor(getter="getAlgorithm",setter="setAlgorithm")
     */
    private $algorithm;
	
    /**
     * @Type("string")
     * @SerializedName("ValidFrom")
     * @Accessor(getter="getValidFrom",setter="setValidFrom")
     */
    private $validFrom;
	
    /**
     * @Type("string")
     * @SerializedName("VaidTo")
     * @Accessor(getter="getValidTo",setter="setValidTo")
     */
    private $validTo;
	
    /**
     * @Type("string")
     * @SerializedName("Expires")
     * @Accessor(getter="getExpires",setter="setInfo")
     */
    private $expires;
	
    /**
     * @Type("string")
     * @SerializedName("Subject")
     * @Accessor(getter="getSubject",setter="setSubject")
     */
    private $subject;
	
    /**
     * @Type("string")
     * @SerializedName("SubjectData")
     * @Accessor(getter="getSubjectData",setter="setSubjectData")
     */
    private $subjectData;
	
    /**
     * @Type("string")
     * @SerializedName("Primary")
     * @Accessor(getter="getPrimary",setter="setPrimary")
     */
    private $primary;
	
    /**
     * @Type("string")
     * @SerializedName("Issuer")
     * @Accessor(getter="getIssuer",setter="setIssuer")
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
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
     * @return InformationResponse
     */
    public function setIssuer(string $issuer) : InformationResponse
    {
        $this->issuer = $issuer;
        return $this;
    }
}