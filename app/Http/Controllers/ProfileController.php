<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\agents;

class ProfileController extends Controller
{

    function showProfile()
    {
        $userInfo = session()->get('userInfo');

        if ($userInfo) {
            return view('profile', $userInfo);
        } else {
            dd($userInfo); // middleware has failed
        }
    }

    function updateProfile(Request $request)
    {

        // validate
        $request->validate(
            [
                'first_name' => 'required|min:3|string',
                'last_name' => 'required|min:3|string',
                'age' => 'required|min:18|numeric',
                'mobile' => 'required|min:11|max:11',
                'company' => 'required|min:5|string',
                // 'img' => 'image'
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

                // 'img.required' => 'Please select a picture for your profile',
                // 'img.image' => 'Please upload a image file',
                // 'img.mimetypes' => 'Please select a valid image file',
            ]
        );

        $userInfo = session()->get('userInfo');

        if ($userInfo) {

            $info = agents::where('id', $userInfo['id'])->first();

            $info->first_name = $request->first_name;
            $info->last_name = $request->last_name;
            $info->age = $request->age;
            $info->mobile = $request->mobile;
            $info->company = $request->company;
            $info->save();

            $userInfo['first_name'] = $request->first_name;
            $userInfo['last_name'] = $request->last_name;
            $userInfo['age'] = $request->age;
            $userInfo['mobile'] = $request->mobile;
            $userInfo['company'] = $request->company;

            session()->put('userInfo', $userInfo);

            return view('profile', $userInfo + ['updateSuccess' => true]);
        } else {
            return redirect('login');
        }
    }

    function logout()
    {
        session()->forget('userInfo');
        // session()->forget('_previous');
        session()->put('_previous', url('login'));
        // session()->flush();
        // dd(session()->all());
        return redirect('login');
    }
}
