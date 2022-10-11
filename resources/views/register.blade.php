@extends('layouts.app')

@section('header')
    Register 😊😊😊
@endsection

@section('content')
    <form action="/doregister" method="POST">
        @csrf

        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="first_name" id="floating_first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label for="first_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $first_name }}</label>

                @if ($errors->has('first_name'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('first_name') }}
                    </span>
                @endif
            </div>

            <div class="relative z-0 mb-6 w-full group">

                <input type="text" name="last_name" id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label for="last_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $last_name }}</label>

                @if ($errors->has('last_name'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('last_name') }}
                    </span>
                @endif
            </div>
        </div>


        <div class="relative z-0 mb-6 w-full group">
            <input type="number" name="age" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" ">

            <label for="age"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                {{ $age }}
            </label>

            @if ($errors->has('age'))
                <span class="text-red-600 text-xs">
                    {{ $errors->first('age') }}
                </span>
            @endif
        </div>



        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="tel" name="mobile" id="floating_phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label for="floating_phone"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mobile
                    number <span class="text-[5px]">({{ $mobile }})</span></label>
                @if ($errors->has('mobile'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('mobile') }}
                    </span>
                @endif
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="company" id="floating_company"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label for="floating_company"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $company }}</label>

                @if ($errors->has('company'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('company') }}
                    </span>
                @endif
            </div>
        </div>

        <div class="relative z-0 mb-6 w-full group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="img">Profile
                picture</label>
            @if ($errors->has('img'))
                <span class="text-red-600 text-xs">
                    {{ $errors->first('img') }}
                </span>
            @endif
            <input
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file" name="img">
        </div>


        <div class="flex items-center mb-5">
            <input id="terms" type="checkbox" value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a
                    target="_blank" href="https://www.youtube.com/watch?v=XFG0i1cv2zY"
                    class="text-blue-600 dark:text-blue-500 hover:underline">terms and
                    conditions</a>. Even if I have to <strong class="text-orange-500">KILL</strong></label>
        </div>


        <button type="submit"
            class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
            Register👊
        </button>
    </form>

    <script>
        const terms = document.getElementById('terms');
        const btn = document.querySelector('button[type="submit"]');
        btn.disabled = true;
        terms.addEventListener('change', function() {
            if (terms.checked) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        });
    </script>
@endsection
