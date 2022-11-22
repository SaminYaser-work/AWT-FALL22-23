@extends('layouts.app')

@section('header')
    Profile
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <h2 class="text-3xl">API Testing </h2>
    <br>

    <h5 class="text-xl">Get Requests </h5>
    <br>
    <button type="button" id="btnPhone"
        class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
        Get User Phones
    </button>

    <button type="button" id="btnCompany"
        class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
        Get User Company
    </button>

    <h5 class="text-xl">Post Requests </h5>
    <br>

    <form method="POST">
        @csrf
        <button type="submit" id="btnCreate"
            class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
            Create User
        </button>
    </form>
    <form method="POST">
        @csrf
        <button type="submit" id="btnUpdate"
            class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
            Update User
        </button>
    </form>


    <br>

    <form method="POST">
        @csrf
        <input type="text" name="id" id="floating_id"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder="User ID" value=>
        <label for="floating_company"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">User
            ID</label>
        <button type="button" id="btnDelete"
            class="disabled:bg-slate-600 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center disabled:cursor-not-allowed">
            Delete User
        </button>
    </form>

    <div id="tablePhone" class="hidden overflow-x-auto relative shadow-md sm:rounded-lg">
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
                        Mobile
                    </th>
                </tr>
            </thead>

            <tbody id="dataPhone">
            </tbody>
        </table>
    </div>

    <div id="tableCompany" class="hidden overflow-x-auto relative shadow-md sm:rounded-lg">
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
                        Company
                    </th>
                </tr>
            </thead>

            <tbody id="dataCompany">
            </tbody>
        </table>
    </div>

    <script>
        const tablePhone = document.getElementById('tablePhone');
        const tableCompany = document.getElementById('tableCompany');
        const dataPhone = document.getElementById('dataPhone');
        const dataCompany = document.getElementById('dataCompany');
        const btnPhone = document.getElementById('btnPhone');

        const btnCreate = document.getElementById('btnCreate');
        const btnUpdate = document.getElementById('btnUpdate');
        const btnDelete = document.getElementById('btnDelete');

        btnPhone.addEventListener('click', async () => {
            const data = await getPhoneData();

            for (let i = 0; i < data.length; i++) {
                const row = document.createElement('tr');
                row.classList.add('bg-white', 'border-b', 'dark:bg-gray-900', 'dark:border-gray-700');

                const id = document.createElement('th');
                id.classList.add('py-4', 'px-6', 'font-medium', 'text-gray-900', 'whitespace-nowrap',
                    'dark:text-white');
                id.textContent = data[i].id;

                const first_name = document.createElement('td');
                first_name.classList.add('py-4', 'px-6');
                first_name.textContent = data[i].first_name;

                const last_name = document.createElement('td');
                last_name.classList.add('py-4', 'px-6');
                last_name.textContent = data[i].last_name;

                // const age = document.createElement('td');
                // age.classList.add('py-4', 'px-6');
                // age.textContent = data[i].age;

                const mobile = document.createElement('td');
                mobile.classList.add('py-4', 'px-6');
                mobile.textContent = data[i].mobile;

                // const company = document.createElement('td');
                // company.classList.add('py-4', 'px-6');
                // company.textContent = data[i].company;

                row.appendChild(id);
                row.appendChild(first_name);
                row.appendChild(last_name);
                // row.appendChild(age);
                row.appendChild(mobile);
                // row.appendChild(company);

                dataPhone.appendChild(row);
            }

            tablePhone.classList.remove('hidden');
        })

        btnCompany.addEventListener('click', async () => {
            const data = await getCompanyData();

            for (let i = 0; i < data.length; i++) {
                const row = document.createElement('tr');
                row.classList.add('bg-white', 'border-b', 'dark:bg-gray-900', 'dark:border-gray-700');

                const id = document.createElement('th');
                id.classList.add('py-4', 'px-6', 'font-medium', 'text-gray-900', 'whitespace-nowrap',
                    'dark:text-white');
                id.textContent = data[i].id;

                const first_name = document.createElement('td');
                first_name.classList.add('py-4', 'px-6');
                first_name.textContent = data[i].first_name;

                const last_name = document.createElement('td');
                last_name.classList.add('py-4', 'px-6');
                last_name.textContent = data[i].last_name;

                const company = document.createElement('td');
                company.classList.add('py-4', 'px-6');
                company.textContent = data[i].company;

                row.appendChild(id);
                row.appendChild(first_name);
                row.appendChild(last_name);
                row.appendChild(company);

                dataCompany.appendChild(row);
            }

            tableCompany.classList.remove('hidden');
        })

        btnCreate.addEventListener('click', async () => {

            try {
                const response = await fetch('http://localhost:8000/api/user/create', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'method': 'POST'
                    },
                    body: JSON.stringify({
                        first_name: 'John',
                        last_name: 'Doe',
                        age: 25,
                        company: 'Apple',
                        mobile: '1234567890',
                        _token: '{{ csrf_token() }}'
                    })
                });

                const data = await response.json();
                console.log(data);
            } catch (error) {
                console.log(error);
            }

        })

        btnUpdate.addEventListener('click', async () => {
            const response = await fetch('http://localhost:8000/api/user/update/1', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    first_name: 'John',
                    last_name: 'Doe',
                    age: 18,
                    mobile: '08123456789',
                    company: 'Google',
                    _token: '{{ csrf_token() }}'
                })
            });

            const data = await response.json();
            console.log(data);
        })

        btnDelete.addEventListener('click', async () => {
            const id = document.getElementById('id').value
            const response = await fetch('http://localhost:8000/user/delete/' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    _token: '{{ csrf_token() }}'
                })
            });
            const data = await response.json();
            console.log(data);
        })

        const getPhoneData = async () => {
            const response = await fetch('http://localhost:8000/api/user/phone');
            const data = await response.json();
            console.log(data);
            return data;
        }

        const getCompanyData = async () => {
            const response = await fetch('http://localhost:8000/api/user/company');
            const data = await response.json();
            console.log(data);
            return data;
        }
    </script>
@endsection
