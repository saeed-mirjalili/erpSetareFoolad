<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeRollRequest;
use App\Http\Requests\updateRollRequest;
use App\Http\Resources\RollResource;
use App\Models\Roll;
use Illuminate\Http\Request;

class RollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roll = Roll::paginate(10);
        return RollResource::collection($roll);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeRollRequest $request)
    {
        $barcode = md5(uniqid(rand(),true));
        $array = $request->validated();
        $array['barcodeRoll']=$barcode;
        $result = Roll::create($array);
        return new RollResource($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(Roll $roll)
    {
        return new RollResource($roll->load('cut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRollRequest $request, Roll $roll)
    {
        $roll->update($request->validated());
        return new RollResource($roll);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roll $roll)
    {
        return $roll->delete();
    }
}
