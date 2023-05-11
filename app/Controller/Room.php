<?php

namespace Controller;

use Src\Request;
use Src\View;

class Room
{
    public function show(Request $request)
    {
        if($request->method === 'GET') {
            return new View('room.add');
        }
    }
}