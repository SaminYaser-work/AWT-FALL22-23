<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agents;

class UserController extends Controller
{
    function getUsersPhone() {
        return agents::select('id', 'first_name', 'last_name', 'mobile')->get();
    }

    function getUsersName() {
        return agents::select('id', 'first_name', 'last_name', 'company')->get();
    }

    function createUser(Request $req) {
        $agent = new agents;
        $agent->first_name = $req->first_name;
        $agent->last_name = $req->last_name;
        $agent->age = $req->age;
        $agent->mobile = $req->mobile;
        $agent->company = $req->company;
        $agent->save();
    }

    function updateUser(Request $req) {
        $agent = agents::find($req->id);
        $agent->first_name = $req->first_name;
        $agent->last_name = $req->last_name;
        $agent->age = $req->age;
        $agent->mobile = $req->mobile;
        $agent->company = $req->company;
        $agent->save();
    }

    function deleteUser(Request $req) {
        $agent = agents::find($req->id);
        $agent->delete();
    }
}