<?php

namespace App\Nova;


use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request; 
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;

use Laravel\Nova\Fields\HasMany;

use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class Category extends Resource
{
    public static $group = '0.Blog'; 
    public static $model = \App\Category::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name' , 'projects' , 'students' , 'details' , 'image'
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

            Text::make('Name')->sortable(),

            Textarea::make('Details')->rows(3)->alwaysShow(),
             
            Image::make('Image'),

            Select::make('Approved')->options([
                        '0' => 'No',
                        '1' => 'Yes',
            ])->sortable(),
 

            HasMany::make('Blog'),
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
