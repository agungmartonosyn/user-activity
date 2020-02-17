<?php

namespace Amar\Useractivity;

use Illuminate\Support\ServiceProvider;

class UserActivityProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../migrations/2020_02_17_082456_create_activity_logs_table.php' => database_path("/migrations/2020_02_17_082456_create_activity_logs_table.php"),
        ], 'migrations');
    }
}
