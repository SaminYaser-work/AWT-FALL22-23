@extends('layouts.app')

@section('header')
    Profile
@endsection

@section('content')
    <div class="flex justify-center items-center flex-col gap-4">
        <h2 class="text-2xl">Welcome
            <span class=" text-transparent font-bold bg-clip-text bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                {{ $first_name . ' ' . $last_name }}
            </span>
        </h2>
        <h3 class="text-xl">
            Your Information

        </h3>

        <button type="button" id="changeInfo"
            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-2 py-1 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Change</button>

        @isset($updateSuccess)
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="font-medium">Profile updated!</span>
            </div>
        @endisset

        <form action="/update" method="POST">
            @csrf

            <div class="grid md:grid-cols-2 md:gap-6">

                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:dark:text-gray-500 disabled:text-gray-500"
                        placeholder=" " value={{ $first_name }} disabled>
                    <label for="first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                        Name</label>

                    @if ($errors->has('first_name'))
                        <span class="text-red-600 text-xs">
                            {{ $errors->first('first_name') }}
                        </span>
                    @endif
                </div>

                <div class="relative z-0 mb-6 w-full group">

                    <input type="text" name="last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:dark:text-gray-500 disabled:text-gray-500"
                        placeholder=" " value={{ $last_name }} disabled>
                    <label for="last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                        Name</label>

                    @if ($errors->has('last_name'))
                        <span class="text-red-600 text-xs">
                            {{ $errors->first('last_name') }}
                        </span>
                    @endif
                </div>
            </div>


            <div class="relative z-0 mb-6 w-full group">
                <input type="number" name="age" id="floating_age"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:dark:text-gray-500 disabled:text-gray-500"
                    placeholder=" " value={{ $age }} disabled>

                <label for="age"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Age
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
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:dark:text-gray-500 disabled:text-gray-500"
                        placeholder=" " value={{ $mobile }} disabled>
                    <label for="floating_phone"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Cell</label>
                    @if ($errors->has('mobile'))
                        <span class="text-red-600 text-xs">
                            {{ $errors->first('mobile') }}
                        </span>
                    @endif
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="company" id="floating_company"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:dark:text-gray-500 disabled:text-gray-500"
                        placeholder=" " value="{{ $company }}" disabled>
                    <label for="floating_company"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company</label>

                    @if ($errors->has('company'))
                        <span class="text-red-600 text-xs">
                            {{ $errors->first('company') }}
                        </span>
                    @endif
                </div>
            </div>

            {{-- <div class="relative z-0 mb-6 w-full group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="img">Profile
                    picture</label>
                @if ($errors->has('img'))
                    <span class="text-red-600 text-xs">
                        {{ $errors->first('img') }}
                    </span>
                @endif
                <input
                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="img" value={{ old('img') }}>
            </div>


            <div class="flex items-center mb-5">
                <input id="terms" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                    the <a target="_blank" href="https://www.youtube.com/watch?v=XFG0i1cv2zY"
                        class="text-blue-600 dark:text-blue-500 hover:underline">terms and
                        conditions</a>. Even if I have to <strong class="text-orange-500">KILL</strong></label>
            </div> --}}


            <div class="grid place-items-center">

                <button type="submit" disabled
                    class="disabled:bg-slate-600 disabled:dark:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
                    Update Profile
                </button>
            </div>


        </form>
    </div>

    <script>
        const first_name = document.getElementById('floating_first_name');
        const last_name = document.getElementById('floating_last_name');
        const age = document.getElementById('floating_age');
        const mobile = document.getElementById('floating_phone');
        const company = document.getElementById('floating_company');

        const changeBtn = document.getElementById('changeInfo');
        const submitBtn = document.querySelector('button[type="submit"]');

        changeBtn.addEventListener('click', () => {
            first_name.disabled = false;
            last_name.disabled = false;
            age.disabled = false;
            mobile.disabled = false;
            company.disabled = false;
            submitBtn.disabled = false;
        })
    </script>
@endsection
