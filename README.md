Laravel Alert
=============

![alert](https://cloud.githubusercontent.com/assets/499192/14135442/b644c34c-f65d-11e5-9a65-528fe1ef84a8.jpg)

Laravel alert is a [Bootstrap](http://getbootstrap.com/) alert helper for Laravel and Lumen.

```php
// Flash alert messages.
alert()->success('I hope I didn\'t brain my damage.');

// Use the facade.
Alert::info('Smithers, release the hounds.');

// Dependency injection example.
$alert->warning('¡Ay, caramba!');
```

[![Build Status](https://img.shields.io/travis/vinkla/alert/master.svg?style=flat)](https://travis-ci.org/vinkla/alert)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/vinkla/alert.svg?style=flat)](https://scrutinizer-ci.com/g/vinkla/alert/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/vinkla/alert.svg?style=flat)](https://scrutinizer-ci.com/g/vinkla/alert)
[![Latest Version](https://img.shields.io/github/release/vinkla/alert.svg?style=flat)](https://github.com/vinkla/alert/releases)
[![License](https://img.shields.io/packagist/l/vinkla/alert.svg?style=flat)](https://packagist.org/packages/vinkla/alert)

## Installation
Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require vinkla/alert
```

Add the service provider to `config/app.php` in the `providers` array.

```php
Vinkla\Alert\AlertServiceProvider::class
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in `config/app.php` to your aliases array.

```php
'Alert' => Vinkla\Alert\Facades\Alert::class
```

Include the alert view within your view templates with blade.

```php
@include('alert::alert')
```

## Usage

#### Alert

This is the class of most interest. It is bound to the ioc container as `alert` and can be accessed using the `Facades\Alert` facade.

#### Facades\Alert

This facade will dynamically pass static method calls to the `alert` object in the ioc container which by default is the `Alert` class.

#### AlertServiceProvider

This class contains no public methods of interest. This class should be added to the providers array in `config/app.php`. This class will setup ioc bindings.

### Examples
Here you can see an example of just how simple this package is to use. Out of the box it will just work:

```php
// You can alias this in config/app.php.
use Vinkla\Alert\Facades\Alert;

Alert::danger('Eat my shorts.');
// We're done here - how easy was that, it just works!

Alert::error('You, sir, are an idiot.');
// This example is simple and there are far more methods available.
```

If you prefer to use dependency injection over facades like me, then you can inject the manager:

```php
use Vinkla\Alert\Alert;

class Foo
{
	protected $alert;

	public function __construct(Alert $alert)
	{
		$this->alert = $alert;
	}

	public function bar($message)
	{
		$this->alert->warning($message)
	}
}

App::make('Foo')->bar('I see the light... it burns!');
```

There is also a helper function if that is what you prefer.

```php
// Use the methods.
alert()->error('I feel like such a tool.');

// The alert function accepts message and style.
alert('Marge, can I go out and play?', 'info');
```


## License

Laravel Alert is licensed under [The MIT License (MIT)](LICENSE).
