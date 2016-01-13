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

class ErrorsResponse
{
    /**
     * @var string
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