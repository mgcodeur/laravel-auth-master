<?php

namespace Mgcodeur\AuthMaster\Commands;

use Illuminate\Console\Command;

class AuthMasterCommand extends Command
{
    public $signature = 'auth-master:install';

    public $description = 'Laravel auth master installer command';

    public function handle(): int
    {
        $this->call('vendor:publish', ['--tag' => 'auth-master-migrations']);
        $this->call('vendor:publish', ['--tag' => 'auth-master-config']);
        $this->comment('All done');

        return self::SUCCESS;
    }
}
