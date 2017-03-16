# SocialAuth
This Laravel application will let users login using their choice of social networking sites.

Create you laravel/socialite project 
```
composer create-project laravel/laravel SocialAuth 5.4
```
First add the auth in your new project.

```
php artisan make:auth
```
Will add the login and register features to you project. 
lets migrate the newly created tables.
```
php artisan migrate
```
Lets add the Laravel Socialite

Require socilite
``composer require laravel/socialite
```
Next add the following in the config app.php in the service providers section.
```Laravel\Socialite\SocialiteServiceProvider::class,
```
and register ur alias
```
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
```