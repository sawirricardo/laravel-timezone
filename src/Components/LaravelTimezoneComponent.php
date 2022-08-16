<?php

namespace Sawirricardo\LaravelTimezone\Components;

use Illuminate\View\Component;

class LaravelTimezoneComponent extends Component
{
    public function render()
    {
        return view('timezone::laravel-timezone');
    }
}
