<?php

namespace App\Nova;
 
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Filters\Category;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class MBA extends Resource
{
    public static $group = '1.Training';

    public static $model = 'App\MBA';

    public static function label() {

        return 'MBA';

    }
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
            Select::make('Category', 'category')->options([
                        'Financial Accounting' => 'Financial Accounting',
                        'Economic Env of Business' => 'Economic Env of Business',
                        'Marketing' => 'Marketing',
                        'Communication' => 'Communication',
                        'General Mgt' => 'General Mgt',
                    ])->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Reference')->hideFromIndex(),
            Trix::make('Notes')->alwaysShow()->stacked(),
            Textarea::make('concepts')->rows(5)->alwaysShow(),
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
        return [
            new Filters\Category;
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
        return [];
    }
}
