<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    protected $genders = ['Male', 'Female', 'Other'];
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
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store($request) {}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            return response()->json([
                'html' => view('backend.tour-booking.details', [
                    'data' => Booking::with(['details', 'timeSlot'])->find(Crypt::decrypt($id)),
                    'genders' => $this->genders,
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
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $id) {}

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
