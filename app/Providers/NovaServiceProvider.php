<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

use App\Nova\Plan;
use App\Nova\Execution;
use App\Nova\Note;
use App\Nova\MBA;
use App\Nova\Cloud;
use App\Nova\Bigdata;
use App\Nova\Java;
use App\Nova\Picture;
use App\Nova\Lead; 
use App\Nova\User;
use App\Nova\Interview; 
use App\Nova\Document; 

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function resources()
      {  
 
        Nova::resources([

            Plan::class,
            Execution::class,
            Interview::class,
            Document::class,
            Note::class,
            MBA::class,
            Cloud::class,
            Bigdata::class, 
            Java::class, 
            Lead::class,   
            Picture::class,
            User::class,        
        ]);

    }
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return 1 === 1;
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
          //  new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [

            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary(),

            new \PhpJunior\NovaLogViewer\Tool(), 
            
        ];
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
