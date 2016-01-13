<?php

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Tests\Repository\Lookup;

use Mxtb\ApiToken;
use Mxtb\MxToolbox;
use Mxtb\Repository\Lookup\LookupNetworkRepository;
use Mxtb\Model\Lookup\Network\Blacklist;

class LookupNetworkRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBlacklistReturnsBlacklistModel()
    {
        // Arrange
        $mxtb = new MxToolbox(new ApiToken(), false);
        $repo = new LookupNetworkRepository($mxtb);

        // Act
        $blacklist = $repo->getBlacklist('example.com');

        // Assert
        $this->assertInstanceOf(Blacklist::class, $blacklist);
    }
}