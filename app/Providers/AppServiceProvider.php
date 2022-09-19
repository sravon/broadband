<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Social_media;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('commondata',(object)[
            'socialmedia' => Social_media::all(),
            'contacts' => Contact::orderBy('id', 'desc')->get()
        ]);
    }
}
