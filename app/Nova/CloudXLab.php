<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class CloudXLab extends Resource
{
    public static $group = '1.Training';
    public static $model = 'App\CloudXLab';

    public static function label() {

        return 'CloudX Lab';

    }
 
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
        'id', 'category', 'title', 'reference', 'notes', 'concepts'
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
            Text::make('Category')->sortable(), 
            Text::make('Title')->sortable(),
            Text::make('Reference'),
            Trix::make('Notes')->alwaysShow()->stacked(),
            Textarea::make('concepts')->rows(5)->alwaysShow(), 
            AdvancedImage::make('Image1')->croppable()->hideFromIndex(),
            AdvancedImage::make('Image2')->croppable()->hideFromIndex(),
            AdvancedImage::make('Image3')->croppable()->hideFromIndex(),
            AdvancedImage::make('Image4')->croppable()->hideFromIndex(),
            AdvancedImage::make('Image5')->croppable()->hideFromIndex(),
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
