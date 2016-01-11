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

namespace Mxtb\Tests\Model\Lookup\Spf;

use Mxtb\Model\Lookup\Spf\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setPrefix('test info');
        $response->setType('test info');
        $response->setValue('test info');
        $response->setPrefixDesc('test info');
        $response->setDescription('test info');

        // Assert
        $this->assertEquals('test info', $response->getPrefix());
        $this->assertEquals('test info', $response->getType());
        $this->assertEquals('test info', $response->getValue());
        $this->assertEquals('test info', $response->getPrefixDesc());
        $this->assertEquals('test info', $response->getDescription());
    }
}