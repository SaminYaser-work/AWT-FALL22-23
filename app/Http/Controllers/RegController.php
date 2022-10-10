<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    private $data;

    function __construct()
    {
        $this->data = [
            'name' => 'Gandalf',
            'age' => 211,
            'email' => 'bruh@aiub.edu'
        ];
    }

    function register()
    {
        return view('register', $this->data);
    }
}
