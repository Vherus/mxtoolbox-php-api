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

namespace Mxtb\Tests\Model\Lookup\Domain;

use Mxtb\Model\Lookup\Domain\A;

class ATest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
		$response = new A();

        // Act
        $response->setUid('test info');
        $response->setCommand('test info');
        $response->setIsTransitioned(true);
        $response->setCommandArgument('test info');
        $response->setTimeRecorded('2016-01-18T04:46:02.0961705-06:00');
        $response->setReportingNameServer('test info');
        $response->setTimeToComplete('test info');
        $response->setRelatedIP('test info');
        $response->setIsEndpoint(true);
        $response->setHasSubscriptions(true);
        $response->setIsBruteForce(true);
        $response->setMxRep(123);
        $response->setEmailServiceProvider('test info');
        $response->setRelatedLookups(['test key' => 'test info']);
        $response->setTimeouts(['test key' => 'test info']);
		
        $response->setTranscript(['test key' => 'test info']);
		
        $response->setInformation(['test key' => 'test info']);

        // Assert
        $this->assertEquals('test info', $response->getUid());
        $this->assertEquals('test info', $response->getCommand());
        $this->assertEquals(true, $response->getIsTransitioned());
        $this->assertEquals('test info', $response->getCommandArgument());
        $this->assertInstanceOf(\DateTime::class, $response->getTimeRecorded());
        $this->assertEquals('test info', $response->getReportingNameServer());
        $this->assertEquals('test info', $response->getTimeToComplete());
        $this->assertEquals('test info', $response->getRelatedIP());
        $this->assertEquals(true, $response->getIsEndpoint());
        $this->assertEquals(true, $response->getHasSubscriptions());
        $this->assertEquals(true, $response->getIsBruteForce());
        $this->assertEquals(123, $response->getMxRep());
        $this->assertEquals('test info', $response->getEmailServiceProvider());
        $this->assertEquals('test info', $response->getRelatedLookups()['test key']);
        $this->assertEquals('test info', $response->getTimeouts()['test key']);
		
        $this->assertEquals('test info', $response->getTranscript()['test key']);
		
        $this->assertEquals('test info', $response->getInformation()['test key']);
    }
}