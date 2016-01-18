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
 
namespace Mxtb\Model\Lookup\Domain\Mx;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class ErrorsResponse
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Message")
     * @Accessor(getter="getMessage",setter="setMessage")
     */
    private $message;
	
    /**
     * @return string|null
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return ErrorsResponse
     */
    public function setMessage(string $message = null) : ErrorsResponse
    {
        $this->message = $message;
        return $this;
    }
}