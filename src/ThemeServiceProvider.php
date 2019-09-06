<?php

namespace Muhammetsait\NovaRtl;

use Illuminate\Support\Facades\App;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (
            in_array(App::getLocale(), [
                'ar', 'arc', 'dv', 'fa', 'ha', 'he', 'khw', 'ks', 'ku', 'ps', 'ur', 'yi'
            ])
            || 'rtl' == config('app.direction')
        ) {
            Nova::serving(function (ServingNova $event) {
                Nova::style('nova-rtl', __DIR__ . '/../resources/css/theme.css');
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
