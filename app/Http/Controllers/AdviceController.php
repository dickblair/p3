<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function index($title = 'first default title')
    {
        return view('advice.title') -> with(['title' => $title]);
    }

    public function show($title = 'second default title')
    {
        return view('advice.contact') ->with(['title' => $title]);
    }
}
