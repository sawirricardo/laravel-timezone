<?php

namespace Sawirricardo\LaravelTimezone;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
