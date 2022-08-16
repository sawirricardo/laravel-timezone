<?php

namespace Sawirricardo\LaravelTimezone\Http\Controllers;

use Sawirricardo\LaravelTimezone\Requests\LaravelTimezoneRequest;
use Symfony\Component\HttpFoundation\Response;

class LaravelTimezoneController
{
    public function __invoke(LaravelTimezoneRequest $request)
    {
        match (config('timezone.driver')) {
            'session' => session()->put($this->getKey(), $request->timezone),
            default => cache()->rememberForever(
                $this->getKey(),
                fn () => $request->timezone
            ),
        };

        return response()->noContent(Response::HTTP_CREATED);
    }

    protected function getKey()
    {
        return 'timezone.'.clientIp();
    }
}
