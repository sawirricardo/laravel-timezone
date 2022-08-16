[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Use Timezone in your laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/laravel-timezone.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-timezone)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-timezone/run-tests?label=tests)](https://github.com/sawirricardo/laravel-timezone/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/laravel-timezone/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sawirricardo/laravel-timezone/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/laravel-timezone.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/laravel-timezone)

This package takes a different approach to handle different timezone for your user.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-timezone.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-timezone)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/laravel-timezone
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-timezone-config"
```

This is the contents of the published config file:

```php
return [
    // possible options: session, cache
    'driver' => 'cache',

    'url' => 'laravel-timezone',
    'controller' => \Sawirricardo\LaravelTimezone\Http\Controllers\LaravelTimezoneController::class,

    'allowed_timezones' => [
        ...timezone_identifiers_list(),
    ],

    'middleware' => [
        'web',
    ],
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-timezone-views"
```

## Usage

```php
echo currentTimezone(); // UTC
```

```blade
{{-- Just put this in your layout file --}}
<x-laravel-timezone />
```

These should be enough for most cases, however, if you have a different case, you can try hit the route endpoint and supply the timezone param to the request, for example:

```html
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        axios
            .post("{{ route('laravel-timezone') }}", {
                timezone: timezone,
            })
            .catch((error) => null);
    });
</script>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/sawirricardo/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
