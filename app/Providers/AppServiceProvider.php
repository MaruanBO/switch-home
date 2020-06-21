<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $security = DB::table('seguridad')->get()->first();

        $accident = DB::table('incidente')->get()->first();

        View::share('security', $security);

        View::share('accident', $accident);
    }
}
