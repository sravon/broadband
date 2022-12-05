<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\LinkPageToMenu;
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
            'contacts' => Contact::orderBy('id', 'desc')->get(),
            'submenuofservice' => LinkPageToMenu::join('pages', 'pages.id', '=', 'link_page_to_menus.pageid')
            ->select('pages.*', 'link_page_to_menus.*')->where('link_page_to_menus.submenutype', 0)->get(),
            'perentmenu' => LinkPageToMenu::join('pages', 'pages.id', '=', 'link_page_to_menus.pageid')
            ->select('pages.*', 'link_page_to_menus.*')->where('link_page_to_menus.submenutype', 1)->get()
        ]);
    }
}
