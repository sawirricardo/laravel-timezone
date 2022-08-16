<?php

use function Pest\Laravel\postJson;

it('stores the timezone into the session', function () {
    postJson(route('laravel-timezone'), ['timezone' => 'Europe/Berlin'])
        ->assertCreated();
    expect(currentTimezone())->toBe('Europe/Berlin');
});

it('throws validation errors when the timezone is not valid', function () {
    postJson(route('laravel-timezone'), ['timezone' => 'invalid'])
        ->assertUnprocessable();
    expect(currentTimezone())->toBeString(config('app.timezone'));
});
