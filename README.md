# Spatie Laravel Permission Package
This package allows you to manage user permissions and roles in a database.In this project i have work on 
diffrent tasks.
### Step by Step Spatie Laravel Permission Package.
- First install the package via composer in laravel projects.
```bash
  composer require spatie/laravel-permission.
```
- For the migration and the config/permission.php config file with.
```bash
  php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```
- Run the migrations: After the config and migration have been published and configured, you can create the tables for this package by running.
```bash
   php artisan migrate
```
- After run migration create some table.

![pic](https://user-images.githubusercontent.com/65112738/150629561-9b96a510-3b72-4eb2-8531-9dc2081bba15.png)

### Create Role and Permission.
- In HomeConrtoller create roles as writer and admin run this query.
```bash
   $role=Role::create(['name'=>'writer']);  $role=Role::create(['name'=>'admin']); 
```
- After run query in database in role column create writer and admin role.

![table](https://user-images.githubusercontent.com/65112738/150629990-170c3dac-bc7e-4a6b-b728-a5f83d2c9145.PNG)

- After create role give permission to role.

![pic](https://user-images.githubusercontent.com/65112738/150630156-2d9fa926-1148-4f31-a230-fc77aefa322c.png)


