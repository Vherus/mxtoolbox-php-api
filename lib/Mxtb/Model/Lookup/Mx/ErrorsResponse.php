<?php declare(strict_types = 1);

namespace Mxtb\Model\Lookup\Mx;

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
     */
    public function setMessage(string $message) : ErrorsResponse
    {
        $this->message = $message;
        return $this;
    }
}