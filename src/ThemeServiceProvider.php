<?php

namespace Muhammetsait\NovaRtl;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

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
            Nova::theme(asset('/vendor/muhammetsait/novartl/theme.css'));
        }

        $this->publishes([
            __DIR__ . '/../resources/css' => public_path('vendor/muhammetsait/novartl'),
        ], 'public');
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
