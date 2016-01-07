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

namespace Mxtb\Tests;

use Mxtb\ApiToken;
use Mxtb\MxToolbox;

class MxToolboxTest extends \PHPUnit_Framework_TestCase
{
    public function testGetApiTokenReturnsApiToken()
    {
        // Arrange
        $mxtb = new MxToolbox(new ApiToken('test-token'));

        // Act
        $token = $mxtb->getApiToken();

        // Assert
        $this->assertInstanceOf(ApiToken::class, $token);
    }

    public function testCanSetApiToken()
    {
        // Arrange
        $mxtb = new MxToolbox();

        // Act
        $mxtb->setApiToken(new ApiToken('test-token'));

        // Assert
        $this->assertNotNull($mxtb->getApiToken());
    }
}
