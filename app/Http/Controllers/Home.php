<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index($name)
    {
        echo "Hi " . $name;
    }
}
