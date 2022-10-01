<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Page;
use App\Models\Setting;
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
            'setting' => Setting::find(1),
            'pages' => Page::all(),
            'contacts' => Contact::orderBy('id', 'desc')->get()
        ]);
    }
}
