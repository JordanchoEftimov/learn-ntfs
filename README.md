### LearnNFTs setup

#### Technologies used
- Vue.js 2
- Laravel 8
- Bootstrap 5
- MySQL
- Inertia.js

#### How to setup LearnNFTs locally
1. Copy the origin url and clone it to your machine using:
```bash
git clone https://github.com/JordanchoEftimov/learn-ntfs.git
```
2. Run
```bash
npm install
```
3. Run
```bash
composer install
```
4. After cloning the project and installing the packages needed for the frontend and backend application, configure your enviroment by copying the `.env.example` file and naming it into `.env` file at the root of the project.
5. Next generate your application key using:
```bash
php artisan key:generate
```
6. In the `.env` file, connect to a local database on your machine. Here are all the key, value pairs you need to configure:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
# usually only the three values below are changed
DB_DATABASE=learn_ntfs
DB_USERNAME=root
DB_PASSWORD=
```
8. On two different terminals, start the backend and frontend application to run simultaneously by running:
```bash
php artisan serve # for the backend application to start
```
```bash
npm run watch # for the frontend application to start
```
9. That's it. Now you have the LearnNFTs application started and ready to go on your machine.
