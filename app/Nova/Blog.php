<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text; 
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea; 
use Laravel\Nova\Fields\HasOne;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Ctessier\NovaAdvancedImageField\AdvancedImage;

use Laravel\Nova\Fields\Trix;


use Laravel\Nova\Http\Requests\NovaRequest;

class Blog extends Resource
{
    public static $group = '0.Blog'; 

    public static $model = \App\Blog::class;

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
        'id',
    ];


    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            BelongsTo::make('User', 'user', 'App\Nova\User')->hideFromIndex(),

            BelongsTo::make('Category', 'category', 'App\Nova\Category')->sortable(),
 
            Text::make('Name')->sortable(), 

            Textarea::make('Summary')->rows(5)->sortable(), 

            Trix::make('Blog')->alwaysShow(),

            Text::make('Tag' ,'tags')->sortable(), 

            AdvancedImage::make('Image1')->disk('public')->croppable(4/3)->resize(400, 300),

            AdvancedImage::make('Image2')->disk('public')->croppable(4/3)->resize(400, 300),

            Select::make('Top 1', 'top')->options([
                        '0' => 'No', 
                        '1' => 'Yes',
            ])->displayUsingLabels(), 

            Select::make('Top 2', 'top2')->options([
                        '0' => 'No', 
                        '1' => 'Yes',
            ])->displayUsingLabels(), 

            Select::make('Popular', 'popular')->options([
                        '0' => 'No', 
                        '1' => 'Yes',
            ])->displayUsingLabels(), 

             Select::make('Featured', 'featured')->options([
                        '0' => 'No', 
                        '1' => 'Yes',
            ])->displayUsingLabels(), 

            Select::make('Approved', 'approved')->options([
                        '0' => 'No', 
                        '1' => 'Yes',
            ])->displayUsingLabels(),

   //         BelongsToMany::make('Subject'),

   //         BelongsToMany::make('Project'),
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
