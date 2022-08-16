<?php

namespace Sawirricardo\LaravelTimezone\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Sawirricardo\LaravelTimezone\Requests\LaravelTimezoneRequest;
use Symfony\Component\HttpFoundation\Response;

class LaravelTimezoneController
{
    public function __invoke(LaravelTimezoneRequest $request)
    {
        Cache::remember(
            "timezone." . getIp(),
            now()->addHour(),
            fn () => $request->string('timezone')->toString()
        );

        return response()->noContent(Response::HTTP_CREATED);
    }
}
