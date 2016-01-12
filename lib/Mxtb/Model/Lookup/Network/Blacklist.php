<?php
/**
 * This file is part of mxtoolbox-php-api
 *
 * Copyright (c) 2016 Nathan King (nkvherus@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 *
 * @author Nathan King (nkvherus@gmail.com)
 * @copyright 2016 Nathan King (nkvherus@gmail.com)
 */

namespace Mxtb\Model\Lookup\Network;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class Blacklist extends AbstractNetworkLookup
{
    /**
     * @Type("array<Mxtb\Model\Lookup\Network\Blacklist\FailedResponse>")
     * @SerializedName("Failed")
     * @Accessor(getter="getFailed",setter="setFailed")
     */
    private $failed;

    /**
     * @Type("array<Mxtb\Model\Lookup\Network\Blacklist\PassedResponse>")
     * @SerializedName("Passed")
     * @Accessor(getter="getPassed",setter="setPassed")
     */
    private $passed;
}