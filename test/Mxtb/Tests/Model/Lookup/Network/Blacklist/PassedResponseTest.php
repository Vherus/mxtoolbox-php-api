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

namespace Mxtb\Tests\Model\Lookup\Network\Blacklist;

use Mxtb\Model\Lookup\Network\Blacklist\PassedResponse;

class PassedResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetBlacklistResponseTime()
    {
        // Arrange
        $response = new PassedResponse();

        // Act
        $response->setBlacklistResponseTime('42');

        // Assert
        $this->assertEquals('42', $response->getBlacklistResponseTime());
    }
}
