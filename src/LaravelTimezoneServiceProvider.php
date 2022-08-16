<?php

namespace Sawirricardo\LaravelTimezone;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Sawirricardo\LaravelTimezone\Components\LaravelTimezoneComponent;
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

        Blade::component(LaravelTimezoneComponent::class, 'laravel-timezone');
    }

    public function bootingPackage()
    {
        Route::post(config('timezone.url'), config('timezone.controller'))
            ->name('laravel-timezone')
            ->middleware(config('timezone.middleware'));
    }
}
