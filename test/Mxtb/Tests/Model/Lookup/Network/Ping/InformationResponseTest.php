<?php

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

namespace Mxtb\Tests\Model\Lookup\Network\Ping;

use Mxtb\Model\Lookup\Network\Ping\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setReply('test info');
        $response->setIPAddress('test info');
        $response->setBytes('test info');
        $response->setTime('test info');
        $response->setTTL('test info');

        // Assert
        $this->assertEquals('test info', $response->getReply());
        $this->assertEquals('test info', $response->getIPAddress());
        $this->assertEquals('test info', $response->getBytes());
        $this->assertEquals('test info', $response->getTime());
        $this->assertEquals('test info', $response->getTTL());
    }
}