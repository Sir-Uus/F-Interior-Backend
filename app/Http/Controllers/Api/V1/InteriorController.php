<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Interior;
use App\Http\Requests\StoreInteriorRequest;
use App\Http\Requests\UpdateInteriorRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\InteriorCollection;
use App\Http\Resources\V1\InteriorResource;
use App\Filters\V1\InteriorQuery;
use Illuminate\Http\Request;

class InteriorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new InteriorQuery();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new InteriorCollection(Interior::paginate());
        } else {    
            return new InteriorCollection(Interior::where($queryItems)->paginate());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInteriorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteriorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interior  $interior
     * @return \Illuminate\Http\Response
     */
    public function show(Interior $interior)
    {
        return new InteriorResource($interior);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interior  $interior
     * @return \Illuminate\Http\Response
     */
    public function edit(Interior $interior)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteriorRequest  $request
     * @param  \App\Models\Interior  $interior
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteriorRequest $request, Interior $interior)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interior  $interior
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interior $interior)
    {
        //
    }
}
