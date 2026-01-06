Setup
composer create-project larave/laravel projname
cd projname
npm install
npm run dev
//install livewire
composer require livewire/livewire
php artisan make:livewire componentName

//build the js and css
npm run build
//to automatically refresh the pages on changes
npm run dev
