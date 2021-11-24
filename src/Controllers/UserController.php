<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;

class UserController
{
    public function __invoke(ServerRequestInterface $request)
    {
        return new Response(
            200,
            [],
            "Hello " . $request->getAttribute('name') . "!\n"
        );
    }
}
