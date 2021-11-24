<?php
namespace App\Controllers;
use React\Http\Message\Response;

class HelloController
{
    public function __invoke()
    {
        return new Response(
            200,
            [],
            "Hello world!\n"
        );
    }
}
