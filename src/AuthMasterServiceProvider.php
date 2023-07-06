<?php

namespace Mgcodeur\AuthMaster;

use Illuminate\Support\Facades\Route;
use Mgcodeur\AuthMaster\Commands\AuthMasterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile('auth-master')
            ->hasViews()
            ->hasRoutes(['api'])
            ->hasMigrations(['alter_users_table'])
            ->hasCommand(AuthMasterCommand::class);
    }

    public function packageBooted(): void
    {
        Route::prefix('api')->middleware('api')->group(function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });

        AuthMaster::setAuthModel(config('auth-master.auth.model'));
    }
}
