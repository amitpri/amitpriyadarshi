<?php

namespace App\Nova;

use Auth;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;    
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use KirschbaumDevelopment\NovaMail\Actions\SendMail;
  
use Laravel\Nova\Resource as NovaResource;
use Laravel\Nova\Http\Requests\NovaRequest;

class Lead extends Resource
{
    public static $group = "Lead";

    public static $model = 'App\Lead';
 
    public static $title = 'id';
 
    public static $search = [

        'name', 'name', 'city'
    ]; 
 
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('source')->sortable(),
            Text::make('name')->sortable(),
            Text::make('email')->sortable(),
            Text::make('phone')->sortable(), 
            Text::make('city')->sortable(),  
            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [

             new \Sparclex\NovaImportCard\NovaImportCard(\App\Nova\Lead::class),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [

             
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
         
        return [

            new DownloadExcel,
            new SendMail,

        ];

       

    }
}
