@extends('layouts.app')

@section('header')
    Register 😊😊😊
@endsection

@section('content')


<form action="/doregister" method="POST">
    @csrf
    <table class="mt-5">
        <tr>
            <td>
                <label for="name">Name</label>
            </td>
            <td>
                :<input class="border-2 border-slate-500 ml-2" type="text" name="name" placeholder="{{$name}}">
                @if($errors->has('name'))
                    <span style="color: red;">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </td>
        </tr>

        <tr>
            <td>
                <label for="age">Age</label>
            </td>

            <td>
                :<input class="border-2 border-slate-500 ml-2" type="number" name="age" placeholder="{{$age}}">
                @if($errors->has('age'))
                    <span style="color: red;">
                        {{$errors->first('age')}}
                    </span>
                @endif
            </td>
        </tr>

        <tr>
            <td>
                <label for="company">Company</label>
            </td>
            <td>
                :<input class="border-2 border-slate-500 ml-2" type="text" name="company" placeholder="{{$name}}">
                @if($errors->has('company'))
                    <span style="color: red;">
                        {{$errors->first('company')}}
                    </span>
                @endif
            </td>
        </tr>

        <tr>
            <td>
                <label for="mobile">Mobile</label>
            </td>
            <td>
                :<input  class="border-2 border-slate-500 ml-2" type="number" name="mobile" placeholder="{{$mobile}}">
                @if($errors->has('mobile'))
                    <span style="color: red;">
                        {{$errors->first('mobile')}}
                    </span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <label for="image">Profile Picture</label>
            </td>
            <td>
                :<input class="ml-2" type="file" name="img">
                @if($errors->has('img'))
                    <p style="color: red;">
                        {{$errors->first('img')}}
                    </p>
                @endif
            </td>
        </tr>

    </table>
    <div class="mt-5">
        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5" type="submit">Register 👊</button>
    </div>
</form>
@endsection
