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

namespace Mxtb\Tests\Model\Lookup\Network\Https;

use Mxtb\Model\Lookup\Network\Https\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setIcon('test info');
        $response->setStatus('test info');
        $response->setName('test info');
        $response->setSerial('test info');
        $response->setAlgorithm('test info');
        $response->setValidFrom('test info');
        $response->setValidTo('test info');
        $response->setExpires('test info');
        $response->setSubject('test info');
        $response->setSubjectData('test info');
        $response->setPrimary('test info');
        $response->setIssuer('test info');

        // Assert
        $this->assertEquals('test info', $response->getIcon());
        $this->assertEquals('test info', $response->getStatus());
        $this->assertEquals('test info', $response->getName());
        $this->assertEquals('test info', $response->getSerial());
        $this->assertEquals('test info', $response->getAlgorithm());
        $this->assertEquals('test info', $response->getValidFrom());
        $this->assertEquals('test info', $response->getValidTo());
        $this->assertEquals('test info', $response->getExpires());
        $this->assertEquals('test info', $response->getSubject());
        $this->assertEquals('test info', $response->getSubjectData());
        $this->assertEquals('test info', $response->getPrimary());
        $this->assertEquals('test info', $response->getIssuer());
    }
}