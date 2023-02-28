A simple PHP package to show SweetAlerts with the Laravel Framework in just one line and without any Javascript code

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
    'SweetAlert' => DridiHaythem\LaravelSweetAlert\Facades\SweetAlert::class,
];
```

Include the SweetAlert Component (on every page that will be using SweetAlert).

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

![](/screenshots/Screenshot_1.png)

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

You can Also use SweetAlert Facade

```php
class TestController extends Controller
{
    public function index(SweetAlert $sweetAlert)
    {
        SweetAlert::success()->setTitle('Good job!')->setText('You clicked the button!.')->show();

        return view('welcome');
    }

 ..
 }
```

# Methods

| Method                                        | Description                                                    |
| --------------------------------------------- | -------------------------------------------------------------- |
| success()                                     | sweetalert2 built-in icon                                      |
| warning()                                     | sweetalert2 built-in icon                                      |
| error()                                       | sweetalert2 built-in icon                                      |
| info()                                        | sweetalert2 built-in icon                                      |
| setTitle(String $title)                       | Set the title of the popup                                     |
| setText(String $title)                        | A Set a description for the popup.                             |
| setFooter(String $title)                      | Set the footer of the popup. Can be either plain text or HTML. |
| showCloseButton()                             |                                                                |
| showCancelButton(Stringnull$cancelButtonText) |                                                                |
| showConfirmButton(bool $bool)                 |                                                                |
| show()                                        | **you must call this function in the end to show the alert**   |
