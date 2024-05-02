<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCutRequest;
use App\Http\Requests\updateCutRequest;
use App\Http\Resources\CutResource;
use App\Models\Cut;
use Illuminate\Http\Request;

class CutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cut = Cut::paginate(10);
        return CutResource::collection($cut);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCutRequest $request)
    {
        $cuts = $request->validated();
        foreach ($cuts['width'] as $cut)
            Cut::create([
                'barcodeRoll' => $cuts['barcodeRoll'],
                'barcodeCut' => md5(uniqid(rand(),true)),
                'width'=> $cut
            ]);
        return response()->json('با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cut $cut)
    {
        return new CutResource($cut);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCutRequest $request, Cut $cut)
    {
        $cut->update($request->validated());
        return new CutResource($cut);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cut $cut)
    {
        return $cut->delete();
    }
}
