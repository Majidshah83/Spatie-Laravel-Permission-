Spatie Laravel Package
First install the package via composer in laravel project.Through Commond: composer require spatie/laravel-permission
After that i run the migration and the config/permission.php config file with commond: php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
I run the migrations: After the config and migration have been published and configured, you can create the tables for this package by running:Through this commond: php artisan migrate
After run migration create some table.
