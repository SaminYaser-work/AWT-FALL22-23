# AWT LAB TASKS
__YASER, SAMIN__

_19-39442-1_

_Sec: B_

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

php artisan key:generate
```

Then finally run the following command to start the server:

```bash
php artisan serve
```

And the following command for tailwind to work:

```bash
npm watch
```

Visit `http://localhost:8000` to see the website.

And you are good to go! Please consider giving a ⭐ to this repository if you found it useful 😊😊😊
