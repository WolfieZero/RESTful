<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    /**
     * Returns the collection of the end-point
     *
     * @param   string  $model  Model we are requesting
     * @return  response
     */
    public function collection($model)
    {
        $model    = config('api.resources.' . $model);
        $response = $model::all();
        return response($response);
    }

    /**
     * Returns a single resources based on the primary key
     *
     * @param   string   $model  Model we are requesting
     * @param   integer  $id     ID of the resource we want
     * @return  response
     */
    public function single($model, $id)
    {
        $model    = config('api.resources.' . $model);
        $response = $model::findOrFail($id);
        return response($response);
    }

}
