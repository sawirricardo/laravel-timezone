<?php

namespace Sawirricardo\LaravelTimezone\Http\Controllers;

use Sawirricardo\LaravelTimezone\Events\TimezoneUpdated;
use Sawirricardo\LaravelTimezone\Events\UpdatingTimezone;
use Sawirricardo\LaravelTimezone\Requests\LaravelTimezoneRequest;
use Symfony\Component\HttpFoundation\Response;

class LaravelTimezoneController
{
    public function __invoke(LaravelTimezoneRequest $request)
    {
        event(new UpdatingTimezone($request->timezone, clientIp()));

        if (config('timezone.driver') === 'session') {
            session()->put($this->getKey(), $request->timezone);
        } else {
            cache()->rememberForever($this->getKey(), fn () => $request->timezone);
        }

        event(new TimezoneUpdated($request->timezone, clientIp()));

        return response()->noContent(Response::HTTP_CREATED);
    }

    protected function getKey()
    {
        return 'timezone.'.clientIp();
    }
}
