A very simple PHP package to show SweetAlerts with the Laravel Framework

# Installation

```bash
composer require dridihaythem/laravel-sweet-alert
```

If using laravel < 5.5 include the service provider and alias within `config/app.php`.

```php
'providers' => [
    DridiHaythem\LaravelSweetAlert\SweetAlertProvider::class,
];

'aliases' => [
    'SweetAlert' => DridiHaythem\LaravelSweetAlert\SweetAlert::class,
];
```

Include the JavaScript (on every page that will be using SweetAlert).

```html
...

</head>

<body>
    ...

  <x-sweet-alert />

</body>

</html>
```

# Usage

```php
use DridiHaythem\LaravelSweetAlert\SweetAlert;

class TestController extends Controller
{
    public function index(SweetAlert $sweetAlert)
    {
        $sweetAlert->success()->setTitle('Good job!')->setText('You clicked the button!.')->show();
        // $sweetAlert->info()->setTitle('Good job!')->setText('You clicked the button!.')->show();
        // $sweetAlert->warning()->setTitle('Good job!')->setText('You clicked the button!.')->show();
        // $sweetAlert->error()->setTitle('Good job!')->setText('You clicked the button!.')->show();

        return view('welcome');
    }

 ..
 }
```

Change Button title:

```php

class TestController extends Controller
{
    public function index(SweetAlert $sweetAlert)
    {
        $sweetAlert->success()->setTitle('Good job!')->setText('You clicked the button!.')->setButton('Close')->show();

        return view('welcome');
    }

 ..
 }
```
