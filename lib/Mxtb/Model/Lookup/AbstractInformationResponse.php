<?php declare(strict_types = 1);

namespace Mxtb\Model\Lookup;

abstract class AbstractInformationResponse
{
    /**
     * @var string|null
     */
    protected $type;

    /**
     * @return null|string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(int $type) : AbstractInformationResponse
    {
        $this->type = $type;
        return $this;
    }
}