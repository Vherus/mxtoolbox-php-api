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

use Mxtb\Model\Lookup\Domain\TranscriptResponse;

class TranscriptResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new TranscriptResponse();

        // Act
        $response->setTimeStamp('test info');
        $response->setDepth('test info');
        $response->setServerName('test info');
        $response->setServerIP('test info');
        $response->setAuthoritative('test info');
        $response->setElapsedTime('test info');
        $response->setResult('test info');
        $response->setQuestion('test info');
        $response->setAnswers('test info');

        // Assert
        $this->assertEquals('test info', $response->getTimeStamp());
        $this->assertEquals('test info', $response->getDepth());
        $this->assertEquals('test info', $response->getServerName());
        $this->assertEquals('test info', $response->getServerIP());
        $this->assertEquals('test info', $response->getAuthoritative());
        $this->assertEquals('test info', $response->getElapsedTime());
        $this->assertEquals('test info', $response->getResult());
        $this->assertEquals('test info', $response->getQuestion());
        $this->assertEquals('test info', $response->getAnswers());
    }
}