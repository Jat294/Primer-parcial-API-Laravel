<?php

namespace App\Http\Controllers;

use App\Http\Requests\VechicleRequest;
use App\Models\Vehicle;
use \Illuminate\Http\Response;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Vehicle::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VechicleRequest $request)
    {
        $vehicle = Vehicle::create($request->all());
        return response()->json(['vehicle' => $vehicle], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return response()->json(['vehicle' => $vehicle], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VechicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return response()->json(['vehicle' => $vehicle], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return response()->json(null, Response::HTTP_ACCEPTED);
    }
}
