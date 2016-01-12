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
 
namespace Mxtb\Model\Lookup\Domain\Spf;

use Mxtb\Model\Lookup\Domain\AbstractInformationResponse;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     */
    private $prefix;
	
    /**
     * @var string|null
     */
    private $value;
	
    /**
     * @var string|null
     */
    private $prefixDesc;
	
    /**
     * @var string|null
     */
    private $description;
	
    /**
     * @return string|null
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }

    /**
     * @param string|null $prefix
     */
    public function setPrefix(string $prefix) : InformationResponse
    {
        $this->prefix = $prefix;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     */
    public function setValue(string $value) : InformationResponse
    {
        $this->value = $value;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getPrefixDesc() : string
    {
        return $this->prefixDesc;
    }

    /**
     * @param string|null $prefixDesc
     */
    public function setPrefixDesc(string $prefixDesc) : InformationResponse
    {
        $this->prefixDesc = $prefixDesc;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(string $description) : InformationResponse
    {
        $this->description = $description;
        return $this;
    }
}