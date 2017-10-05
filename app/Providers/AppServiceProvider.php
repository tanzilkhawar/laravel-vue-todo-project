<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('bootstrapper::form', function ($app) { $form = new Form( $app->make('collective::html'), $app->make('url'), $app->make('view'), $app['session.store']->getToken(), $app['session.store']->token() ); return $form->setSessionStore($app['session.store']); },true);
    }
}
