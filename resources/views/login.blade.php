@extends('layouts.app')

@section('header')
    Login
@endsection

@section('content')

    @isset($showError)
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    <span class="font-medium">Login failed!</span> Credentials did not match.
    </div>

    @endisset

    <form action="/login" method="POST">
        @csrf


        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="tel" name="mobile" id="floating_phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    value={{old('mobile')}}>
                <label for="floating_phone"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{$mobile}}</label>
                @if ($errors->has('mobile'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('mobile') }}
                    </span>
                @endif
            </div>
        </div>


        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="company" id="floating_company"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" "
                    value={{old('company')}}>
                <label for="floating_company"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $company }}</label>

                @if ($errors->has('company'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('company') }}
                    </span>
                @endif
            </div>
        </div>


        <button type="submit"
            class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
            Login
        </button>
    </form>
@endsection
