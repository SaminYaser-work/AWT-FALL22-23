<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Changes
class PageController extends Controller
{
    private $name;
    private $age;
    private $imageLink;

    function __construct()
    {
        $this->name = 'বঙ্গবন্ধু শেখ মুজিবুর রহমান';
        $this->age = 'dead';
        $this->imageLink = 'https://www.jugantor.com/assets/news_photos/2021/03/17/image-402653-1615932421.jpg';
    }

    function home()
    {
        return view('Home')
            ->with("name", $this->name)
            ->with('age', $this->age)
            ->with('imageLink', $this->imageLink);
    }

    function setAge($age)
    {
        return view('Home')
            ->with("name", $this->name)
            ->with('age', $age)
            ->with('imageLink', $this->imageLink);
    }
}
