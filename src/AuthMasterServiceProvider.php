<?php

namespace Mgcodeur\AuthMaster;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mgcodeur\AuthMaster\Commands\AuthMasterCommand;

class AuthMasterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-auth-master')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-auth-master_table')
            ->hasCommand(AuthMasterCommand::class);
    }
}
