<?php

namespace Sawirricardo\LaravelTimezone\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\LaravelTimezone\LaravelTimezoneServiceProvider;

class TestCase extends Orchestra
{
    public function getEnvironmentSetUp($app)
    {
        config()->set('app.key', 'base64:3jLpxcFalRkVkcTWWVo3YiTFDuKhnhhL7D7wZPXO4gg=');
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelTimezoneServiceProvider::class,
        ];
    }
}
