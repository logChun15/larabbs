<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //      if (app()->environment() == 'local' || app()->environment() == 'testing') {

    //         $this->app->register(\Summerblue\Generator\GeneratorsServiceProvider::class);

    //     }
    // }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
        \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
        Paginator::useBootstrap();
    }

    public function register()
    {
        if (app()->isLocal()) {
        $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }

}
