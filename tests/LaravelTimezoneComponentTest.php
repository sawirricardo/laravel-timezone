<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;

it('renders the component', function () {
    $html = Blade::render('<x-laravel-timezone />');

    assertMatchesHtmlSnapshot($html);
});
