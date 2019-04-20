<?php

namespace App\Repositories\Note;


use Illuminate\Support\ServiceProvider;


class NoteRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Note\NoteInterface', 'App\Repositories\Note\NoteRepository');
    }
}