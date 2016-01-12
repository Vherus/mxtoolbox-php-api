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

namespace Mxtb\Tests\Api\Lookup;

use Mxtb\Api\Lookup\Blacklist;
use Mxtb\Model\Lookup\Network\Blacklist as BlacklistResponse;
use Mxtb\ApiToken;
use Mxtb\MxToolbox;

class BlacklistTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBlacklistReturnsObject()
    {
        $mxtb = new MxToolbox(new ApiToken(''), false);

        $api = new Blacklist($mxtb);

        $this->assertInstanceOf(BlacklistResponse::class, $api->getBlacklist('example.com'));
    }
}