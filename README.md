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
```
composer require laravel/socialite
```
Next add the following in the config app.php in the service providers section.
```
Laravel\Socialite\SocialiteServiceProvider::class,
```
and register ur alias
```
'Socialite' => Laravel\Socialite\Facades\Socialite::class,
```
create a new controller. SocialLoginController
```
<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialLoginController extends Controller
{
    //
    public function redirect($servie, Request $request)
    {

    }
    public function callback ($servie, Request $request)
    {

    }
}
```
Change the services.php file inside the config folder
```
    'github'=> [
        'client_id'=>env('GITHUB_CLIENT_ID'),
        'client_secret'=>env('GITHUB_CLIENT_SECRET'),
        'redirect'=>env('GITHUB_REDIRECT_URL')
    ]
```

update your .env file
```
GITHUB_CLIENT_ID=01376de79d5cda891245
GITHUB_CLIENT_SECRET=069fb55481221313619ebfa2e1326973a39c3934
GITHUB_REDIRECT_URL = http://localhost:8000/login/github/callback
```