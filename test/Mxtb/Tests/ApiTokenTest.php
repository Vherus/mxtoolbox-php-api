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

class ApiTokenTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetKey()
    {
        // Arrange
        $token = new \Mxtb\ApiToken('test-token');

        // Act
        $token->set('new-token');

        // Assert
        $this->assertEquals('new-token', $token->get());
    }
}