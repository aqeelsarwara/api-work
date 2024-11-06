<?php

namespace App\Http\Controllers;

class HostClass extends Controller
{
    public static function getserverIp()
    {
        return '127.0.0.1:2000';
        // return '221.120.216.121:5000';
    }

}