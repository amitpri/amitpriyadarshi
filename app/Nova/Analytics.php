<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request; 
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea; 
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Hidden; 
use Laravel\Nova\Http\Requests\NovaRequest;

class Analytics extends Resource
{
    public static $group = '0.Plan';

    public static function label() {

        return '5.Analytics';

    }

    public static $model = 'App\Analytics';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'topic' , 'subtopic' , 'notes'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Topic')->sortable()->rules('required', 'max:255'),

            Text::make('Subtopic')->sortable()->rules('required', 'max:255'), 

            Trix::make('Notes')->alwaysShow()->stacked(),
 
         
            
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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
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
        return [];
    }
}
