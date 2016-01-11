<?php

namespace Mxtb\Tests\Model\Lookup\Mx;

use Mxtb\Model\Lookup\Mx\ErrorsResponse;

class ErrorsResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new ErrorsResponse();

        // Act
        $response->setMessage('test info');

        // Assert
        $this->assertEquals('test info', $response->getMessage());
    }
}