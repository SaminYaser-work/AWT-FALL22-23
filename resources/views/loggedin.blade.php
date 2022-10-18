@extends('layouts.app')

@section('header')
    Profile
@endsection

@section('content')
    <h3 class="text-2xl">Welcome Admin 😍😍</h3>
    <h5 class="text-xl">Used only for debugging purposes</h5>
    <h5 class="text-xl">Here's the <span class="font-mono font-bold">users</span> table ℹ️</h5>
    <br>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Mobile
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Company
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $d)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $d->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $d->first_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $d->last_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $d->age }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $d->mobile }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $d->company }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
