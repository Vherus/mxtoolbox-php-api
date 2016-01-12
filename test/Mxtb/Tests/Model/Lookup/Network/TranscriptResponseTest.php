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

namespace Mxtb\Tests\Model\Lookup\Network;

use Mxtb\Model\Lookup\Network\TranscriptResponse;

class TranscriptResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new TranscriptResponse();

        // Act
        $response->setTranscript('test info');

        // Assert
        $this->assertEquals('test info', $response->getTranscript());
    }
}