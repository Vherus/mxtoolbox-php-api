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

use Mxtb\Model\Monitor\ActionResponse;

class ActionResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
		$response = new ActionResponse();

        // Act
        $response->setActionString('test info');
        $response->setCommand('test info');
        $response->setAddress('test info');
        $response->setIsAll(true);
        $response->setThreshold(123);
        $response->setAllowPrivateIP(true);
        $response->setIsMonitorable(true);
        $response->setLarArgument('test info');
        $response->setHttpRegex('test info');
        $response->setTcpPort(123);
        $response->setSmtpPort(123);
        $response->setMailflowIp('test info');
        $response->setSpecialServer('test info');
        $response->setCommandParts(['key' => 'test info']);

        // Assert
        $this->assertEquals('test info', $response->getActionString());
        $this->assertEquals('test info', $response->getCommand());
        $this->assertEquals('test info', $response->getAddress());
        $this->assertEquals(true, $response->getIsAll());
        $this->assertEquals(123, $response->getThreshold());
        $this->assertEquals(true, $response->getAllowPrivateIP());
        $this->assertEquals(true, $response->getIsMonitorable());
        $this->assertEquals('test info', $response->getLarArgument());
        $this->assertEquals('test info', $response->getHttpRegex());
        $this->assertEquals(123, $response->getTcpPort());
        $this->assertEquals(123, $response->getSmtpPort());
        $this->assertEquals('test info', $response->getMailflowIp());
        $this->assertEquals('test info', $response->getSpecialServer());
        $this->assertEquals('test info', $response->getCommandParts()['key']);
    }
}