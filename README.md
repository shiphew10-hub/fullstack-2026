requirements
XAMPP or (mysql and php)
composer
nodejs
git for windows

Setup
composer create-project larave/laravel projname
cd projname
npm install
npm run dev
composer install
//install livewire
composer require livewire/livewire
php artisan make:livewire componentName

//to use icons we can take heroicons
https://heroicons.com/

//build the js and css
npm run build
//to automatically refresh the pages on changes
npm run dev

//for ui components we will use maryui
https://mary-ui.com/docs/installation
composer require robsontenorio/mary
php artisan mary:install

//to connect to your database edit the .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=msme_hotel
DB_USERNAME=yourusername
DB_PASSWORD=yourpassword

//create migration file along with model
php artisan make:model MenuCategory -m
