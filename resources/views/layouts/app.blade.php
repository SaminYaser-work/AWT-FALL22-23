<!DOCTYPE html>

<html lang="en" class="dark">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>

</head>



<body style="background: linear-gradient(176deg, rgba(18,24,27,1) 50%, rgba(32,39,55,1) 100%);"
    class="text-white min-h-screen">



    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">

        <div class="container flex flex-wrap justify-between items-center mx-auto">

            <a href="{{ url('home') }}" class="flex items-center">

                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5a/Logo_of_Bangladesh_Chhatra_League.svg/1200px-Logo_of_Bangladesh_Chhatra_League.svg.png"
                    class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />

                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">বাংলাদেশ ছাত্রলীগ</span>

            </a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">

                <span class="sr-only">Open main menu</span>

                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">

                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>

                </svg>

            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">

                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>

                        <a href="{{ url('home') }}"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>

                    </li>

                    <li>

                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>

                    </li>

                    <li>

                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>

                    </li>

                    <li>

                        <a href="{{ url('register') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>

                    </li>

                    <li>

                        <a href="{{ url('login') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <div class="container mx-auto mt-5">

        <div class="flex justify-center items-center flex-col">

            <h1 class="text-3xl">@yield('header')</h1>

            <main class="mt-5">

                @yield('content')

            </main>

        </div>

    </div>



</html>
