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

namespace Mxtb\Tests\Model\Lookup\Network\Trace;

use Mxtb\Model\Lookup\Network\Trace\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setHopCount('test info');
        $response->setIPAddress('test info');
        $response->setHostName('test info');

        // Assert
        $this->assertEquals('test info', $response->getHopCount());
        $this->assertEquals('test info', $response->getIPAddress());
        $this->assertEquals('test info', $response->getHostName());
    }
}