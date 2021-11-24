<?php
namespace App\Tests;

use App\Controllers\UserController;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\ServerRequest;

class UserControllerTest extends TestCase
{
    public function testControllerReturnsValidResponse()
    {
        $request = new ServerRequest("GET", 'https://127.0.0.1:800/users/Alice');
        $request = $request->withAttribute('name', 'Alice');
        $controller = new UserController();
        $response = $controller($request);
        $this->assertInstanceOf(ResponseInterface::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Hello Alice!\n", (string) $response->getBody());
    }
}