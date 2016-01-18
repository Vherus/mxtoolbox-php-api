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

namespace Mxtb\Tests\Model\Monitor;

use Mxtb\Model\Monitor\Monitor;

class MonitorTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
		$response = new Monitor();

        // Act
        $response->setMonitorUid('test info');
        $response->setActionString('test info');
        $response->setLastTransition('test info');
        $response->setLastChecked('test info');
        $response->setMxRep('test info');
        $response->setHistoryUrl('test info');
        $response->setName('test info');
        $response->setTimeElapsed('test info');
        $response->setRecordCount(123);
        $response->setLarUid('test info');
        $response->setFrequencyInMinutes(123);
        $response->setCurrentStatus(123);
        $response->setExpiresIn('test info');
        $response->setExpirationInHours(123);
        $response->setIsActive(true);
        $response->setDomainSubscription('test info');
        $response->setTags(['key' => 'test info']);
        $response->setFailing(['key' => 'test info']);
        $response->setWarnings(['key' => 'test info']);
        $response->setStatusSummary('test info');

        // Assert
        $this->assertEquals('test info', $response->getMonitorUid());
        $this->assertEquals('test info', $response->getActionString());
        $this->assertEquals('test info', $response->getLastTransition());
        $this->assertEquals('test info', $response->getLastChecked());
        $this->assertEquals('test info', $response->getMxRep());
        $this->assertEquals('test info', $response->getHistoryUrl());
        $this->assertEquals('test info', $response->getName());
        $this->assertEquals('test info', $response->getTimeElapsed());
        $this->assertEquals(123, $response->getRecordCount());
        $this->assertEquals('test info', $response->getLarUid());
        $this->assertEquals(123, $response->getFrequencyInMinutes());
        $this->assertEquals(123, $response->getCurrentStatus());
        $this->assertEquals('test info', $response->getExpiresIn());
        $this->assertEquals(123, $response->getExpirationInHours());
        $this->assertEquals(true, $response->getIsActive());
        $this->assertEquals('test info', $response->getDomainSubscription());
        $this->assertEquals('test info', $response->getTags()['key']);
        $this->assertEquals('test info', $response->getFailing()['key']);
        $this->assertEquals('test info', $response->getWarnings()['key']);
        $this->assertEquals('test info', $response->getStatusSummary());
    }
}