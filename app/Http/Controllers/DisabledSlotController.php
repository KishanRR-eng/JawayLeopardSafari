<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisabledSlotRequest;
use App\Models\DisabledSlot;
use App\Models\TimeSlot;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class DisabledSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.disabled-slots.index', ['data' => DisabledSlot::with(['timeSlot'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.disabled-slots.form', ['slots' => TimeSlot::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisabledSlotRequest $request)
    {
        try {
            DisabledSlot::create([
                'time_slot_id' => intval($request->slot),
                'date' => $request->date,
                'type' => $request->type,
            ]);
            return redirect()->route('backend.disabled.slot.index');
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
            DisabledSlot::where('id', $id)->delete();
            return response()->json(['message' => 'Disabled slot removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
