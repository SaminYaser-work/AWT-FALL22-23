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

    function checkLogin(Request $request)
    {

        $checkData = DB::table('users')->where('mobile', $request->mobile)->where('company', $request->company)->first();

        if ($checkData) {

            $data = DB::table('users')->get();

            return view('loggedin')
                ->with('data', $data);
        } else {
            return view('login', $this->labels += ['showError' => true]);
        }
    }
}
