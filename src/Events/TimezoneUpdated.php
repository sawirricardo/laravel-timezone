<?php

namespace Sawirricardo\LaravelTimezone\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TimezoneUpdated
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /** @var string */
    public $timezone;

    /** @var string */
    public $ip;

    public function __construct($timezone, $ip)
    {
        $this->timezone = $timezone;
        $this->ip = $ip;
    }
}
