<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    private $data;

    function __construct()
    {
        // Label values
        $this->data = [
            'first_name' => 'Your first name',
            'last_name' => 'Your last name',
            'age' => 'Your age',
            'company' => 'Your company name',
            'mobile' => '017XXXXXXXX'
        ];
    }

    function register()
    {
        return view('register', $this->data);
    }

    function doRegistration(Request $request)
    {
        // Validation
        $request->validate(
            [
                'first_name' => 'required|min:3|string',
                'last_name' => 'required|min:3|string',
                'age' => 'required|min:18|numeric',
                'mobile' => 'required|min:11|max:11',
                'company' => 'required|min:5|string',
                'img' => 'required|image'
            ],
            [
                'fisrt_name.required' => 'Please input your first name',
                'first_name.min' => 'Enter 3 characters minimum',

                'last_name.required' => 'Please input your last name',
                'last_name.min' => 'Enter 3 characters minimum',

                'age.required' => 'Please input your age',
                'age.min' => 'You must be above to 18 to register',

                'mobile.required' => 'Please input your mobile',
                'mobile.min' => 'Mobile number must be exactly 11 digits long',
                'mobile.max' => 'Mobile number must be exactly 11 digits long',

                'company.required' => 'Please input your company',
                'company.min' => 'Company name must be at least 5 characters long',

                'img.required' => 'Please select a picture for your profile',
                'img.image' => 'Please upload a image file',
                // 'img.mimetypes' => 'Please select a valid image file',
            ]
        );

        $output = $request->name;
        print_r($request);

        return $output;
    }
}