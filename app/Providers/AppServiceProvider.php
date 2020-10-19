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
        //
        config()->set('web.name', 'Chidory Photograph');
        config()->set('web.url', 'www.chidory.co');
        config()->set('web.phone', '+62.857.9088.4091');
        config()->set('web.address', 'Jl. Welirang 1 / 109 Malang, Jawa Timur');
        config()->set('web.email', 'talk@chidory.co');
        config()->set('web.whatsapp', 'https://wa.me/6285790884091?text=I%27m%20inquiring%20about%20the%20photograph');
        config()->set('web.facebook', 'https://www.facebook.com/chidoryhome/');
        config()->set('web.instagram', 'https://www.instagram.com/chidoryhome');
        config()->set('web.youtube', 'https://www.youtube.com/channel/UClo_wcUys2fFDVhmuXWkCyw');
    }
}
