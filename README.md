# AWT LAB TASKS

**YASER, SAMIN**

_19-39442-1_

_Sec: B_

## Tasks

-   [Task 1](https://github.com/SaminYaser-work/AWT-FALL22-23/blob/master/resources/views/register.blade.php) (Form creation)
-   [Task 2](https://github.com/SaminYaser-work/AWT-FALL22-23/blob/master/app/Http/Controllers/RegController.php) (Form validation)
-   [Task 3](https://github.com/SaminYaser-work/AWT-FALL22-23/blob/master/app/Http/Controllers/ProfileController.php) (Update database)

## Usage Instruction

Firstly, clone the repository using the following command:

```bash
git clone https://github.com/SaminYaser-work/AWT-FALL22-23.git
```

Then, `cd` into that directory and run the following commands to install the dependencies:

```bash
cd AWT-FALL22-23
composer install
npm install
```

Initiate the environment variables by copying the `.env.example` file to `.env` and then run the following command:

```bash
copy .env.example .env
```

Change the database credentials in the `.env` file to your own credentials. Mine is

```bash
DB_DATABASE=agents
DB_USERNAME=root
DB_PASSWORD=
```

Then, run the following commands to generate the application key and migrate the database:

```bash
php artisan key:generate
```

Then finally run the following command to start the server:

```bash
php artisan serve
```

And the following command for tailwind to work:

```bash
npm run watch
```

Visit `http://localhost:8000` to see the website.

And you are good to go! Please consider giving a ⭐ to this repository if you found it useful 😊😊😊
