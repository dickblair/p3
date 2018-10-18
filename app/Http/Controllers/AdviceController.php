<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function index()
    {
        return 'Here is the advice you requested';
    }

    public function show()
    {
        return 'You are seeing all the advice';
    }
}
