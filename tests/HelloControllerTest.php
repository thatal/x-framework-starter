<?php
namespace App\Tests;

use App\Controllers\HelloController;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\ServerRequest;

class HelloControllerTest extends TestCase
{
    public function testControllerReturnsValidResponse()
    {
        $request    = new ServerRequest("GET", '127.0.0.1:8000');
        $controller = new HelloController();
        $response   = $controller($request);
        $this->assertInstanceOf(ResponseInterface::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Hello world!\n", (string) $response->getBody());
    }
}
