<?php

namespace App\Http\Controllers;

use App\Models\agents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    private $labels;

    function __construct()
    {


        $this->labels = [
            'mobile' => 'Your mobile no.',
            'company' => 'Your company name'
        ];
    }

    function login()
    {
        return view('login', $this->labels);
    }

    function loginAfterReg()
    {
        return view('login', $this->labels + ['showNewRegMsg' => true]);
    }

    function loginFirst()
    {
        return view('login', $this->labels + ['showMustLogin' => true]);
    }

    function checkLogin(Request $request)
    {

        $request->session()->flush();
        $checkData = DB::table('users')->where('mobile', $request->mobile)->where('company', $request->company)->first();

        if ($checkData) {

            $userInfo = [
                'id' => $checkData->id,
                'first_name' => $checkData->first_name,
                'last_name' => $checkData->last_name,
                'age' => $checkData->age,
                'mobile' => $checkData->mobile,
                'company' => $checkData->company
            ];

            $request->session()->put('userInfo', $userInfo);

            // return view('profile', $userInfo);
            return redirect('/profile');
        } else {
            return view('login', $this->labels += ['showError' => true]);
        }
    }

    function showInfo()
    {
        $data = DB::table('users')->get();

        return view('loggedin')
            ->with('data', $data);
    }
}
