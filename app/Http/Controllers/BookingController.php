<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    protected $genders = ['Male', 'Female', 'Other'];
    protected $identityProofTypes = ['None', 'Aadhar Card', 'Pan Card', 'Driving License', 'Passport'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.tour-booking.index', ['data' => Booking::withCount(['details', 'timeSlot'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.tour-packages.form', [
        //     'vehicles' => TransportationVehicle::all(['id', 'name', 'price']),
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
        // try {
        //     $package = Package::create([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'tourist_type' => $request->tourist_type,
        //         'day_type' => $request->day_type,
        //         'type' => $request->type,
        //         'status' => $request->status == 'on',
        //     ]);
        //     $data = [];
        //     foreach ($request->vehicles as $value) {
        //         $data[] = ['package_id' => $package->id, 'transportation_vehicle_id' => $value];
        //     }
        //     VehiclesMap::insert($data);
        //     return redirect()->route('backend.package.index');
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     dd($th);
        //     Log::critical($th);
        //     abort(404);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            return response()->json([
                'html' => view('backend.tour-booking.details', [
                    'data' => Booking::with(['details'])->find(Crypt::decrypt($id)),
                    'genders' => $this->genders,
                    'identityProofTypes' => $this->identityProofTypes
                ])->render()
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // try {
        //     $id = Crypt::decrypt($id);
        //     return view('backend.tour-packages.form', [
        //         'data' => Package::with(['vehiclesMap'])->find($id),
        //         'vehicles' => TransportationVehicle::all(['id', 'name', 'price']),
        //     ]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     Log::critical($th);
        //     abort(404);
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $id)
    {
        // try {
        //     $package = Package::find(Crypt::decrypt($id));
        //     $vehicles = $request->vehicles;
        //     $package->name = $request->name;
        //     $package->price = $request->price;
        //     $package->tourist_type = $request->tourist_type;
        //     $package->day_type = $request->day_type;
        //     $package->type = $request->type;
        //     $package->status = $request->isVisible == 'on';
        //     $package->save();
        //     foreach ($package->vehiclesMap as $map) {
        //         if (in_array($map->transportation_vehicle_id, $vehicles)) {
        //             array_splice($vehicles, array_search($map->transportation_vehicle_id, $vehicles), 1);
        //         } else {
        //             $map->delete();
        //         }
        //     }
        //     if (count($vehicles) > 0) {
        //         $data = [];
        //         foreach ($vehicles as $value) {
        //             $data[] = ['package_id' => $package->id, 'transportation_vehicle_id' => $value];
        //         }
        //         VehiclesMap::insert($data);
        //     }
        //     return redirect()->route('backend.package.index');
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     Log::critical($th);
        //     abort(404);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Booking::where('id', Crypt::decrypt($id))->delete();
            return response()->json(['message' => 'Booking removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
