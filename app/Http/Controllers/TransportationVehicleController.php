<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransportationVehicleRequest;
use App\Models\TransportationVehicle;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class TransportationVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.transportation-vehicles.index', ['data' => TransportationVehicle::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.transportation-vehicles.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransportationVehicleRequest $request)
    {
        try {
            TransportationVehicle::create($request->all());
            return redirect()->route('backend.transportation.vehicle.index');
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $id = Crypt::decrypt($id);
            TransportationVehicle::where('id', $id)->delete();
            return response()->json(['message' => 'Transportation vehicle removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
