<?php

namespace Sawirricardo\LaravelTimezone\Commands;

use Illuminate\Console\Command;

class LaravelTimezoneCommand extends Command
{
    public $signature = 'laravel-timezone';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
