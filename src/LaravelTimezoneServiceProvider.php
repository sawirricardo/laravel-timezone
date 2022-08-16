<?php

namespace Sawirricardo\LaravelTimezone;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sawirricardo\LaravelTimezone\Commands\LaravelTimezoneCommand;

class LaravelTimezoneServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-timezone')
            ->hasConfigFile()
            ->hasViews();
    }
}
