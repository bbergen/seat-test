<?php

namespace Bbergen\Seat\Test\Http\Contrllers;

use Seat\Web\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getPublicTest()
    {
        return 'Hello World!';
    }
}