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

namespace Mxtb\Tests\Model\Lookup\Network\Http;

use Mxtb\Model\Lookup\Network\Http\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setServerType('test info');
        $response->setStatus('test info');
        $response->setContentType('test info');

        // Assert
        $this->assertEquals('test info', $response->getServerType());
        $this->assertEquals('test info', $response->getStatus());
        $this->assertEquals('test info', $response->getContentType());
    }
}