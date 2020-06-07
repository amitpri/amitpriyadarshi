<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class Category extends Filter
{
 
    public $component = 'select-filter';
 
    public function apply(Request $request, $query, $value)
    {
        return $query->where('category', $value);
    }

  
    public function options(Request $request)
    {
        return [
                'Financial Accounting' => 'Financial Accounting',
                'Economic Env of Business' => 'Economic Env of Business',
                'Marketing' => 'Marketing',
                'Communication' => 'Communication',
                'General Mgt' => 'General Mgt'
        ];
    }
}
