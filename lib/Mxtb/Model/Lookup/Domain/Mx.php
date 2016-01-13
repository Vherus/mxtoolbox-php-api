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

namespace Mxtb\Model\Lookup\Domain;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use Mxtb\Model\Lookup\Domain\Mx\ErrorsResponse;

class Mx extends AbstractDomainLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Domain\Mx\ErrorsResponse>")
     * @SerializedName("Errors")
     * @Accessor(getter="getErrors",setter="setErrors")
     */
    private $errors;

    /**
     * @return ErrorsResponse[]|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ErrorsResponse[]|null $errors
     * @return Mx
     */
    public function setErrors(array $errors = null) : Mx
	{
        $this->errors = $errors;
        return $this;
    }
}