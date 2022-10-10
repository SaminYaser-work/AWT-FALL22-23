@extends('layouts.app')

@section('header')
    Register 😊😊😊
@endsection

@section('content')


    <table>
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td>
                :<input class="border-2 border-slate-500 ml-2" type="text" name="name" placeholder="{{$name}}">
            </td>
        </tr>

        <tr>
            <td>
                <label for="age">Age</label>
            </td>

            <td>
                :<input class="border-2 border-slate-500 ml-2" type="number" name="age" placeholder="{{$age}}">
            </td>
        </tr>

        <tr>
            <td>
                <label for="email">Email</label>
            </td>

            <td>
                :<input  class="border-2 border-slate-500 ml-2" type="email" name="email" placeholder="{{$email}}">
            </td>
        </tr>
    </table>
    <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5" type="submit">Register 👊</button>
@endsection
