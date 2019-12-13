<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;  
use Laravel\Nova\Fields\DateTime;
use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Laravel\Nova\Fields\Trix;
use ClassicO\NovaMediaLibrary\MediaField;
use OwenMelbz\RadioField\RadioButton;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Picture extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Picture';

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
        'id',
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

            RadioButton::make('Publish', 'status')
                        ->options([ 
                            '1' => 'Published',
                            '-1' => 'Not Published', 
                        ])->default('0')->sortable(),

            Text::make('Name'),  

            Trix::make('Details')->alwaysShow()->stacked(),
 
            DateTime::make('Event' ,'eventdate'),

            AdvancedImage::make('Profile Photo', 'profile_photo')->disk('public')->croppable(4/3)->resize(400, 300),

            MediaField::make('Image')->listing(),
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
