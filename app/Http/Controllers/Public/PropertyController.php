<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertySearchResource;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Property $property
     * @param Request $request
     * @return PropertySearchResource
     */

    public function __invoke(Property $property, Request $request)
    {
        return new PropertySearchResource($property);
    }
}
