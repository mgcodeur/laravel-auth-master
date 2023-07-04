<?php

namespace Mgcodeur\AuthMaster\Commands;

use Illuminate\Console\Command;

class AuthMasterCommand extends Command
{
    public $signature = 'laravel-auth-master';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
