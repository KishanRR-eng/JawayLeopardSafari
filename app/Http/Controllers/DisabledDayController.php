<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisabledDayRequest;
use App\Models\DisabledDay;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class DisabledDayController
{

    public $days = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.day.index', ['data' => DisabledDay::all(), 'days' => $this->days]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.day.form', ['days' => $this->days]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisabledDayRequest $request)
    {
        try {
            DisabledDay::create($request->all());
            return redirect()->route('backend.day.index');
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
            DisabledDay::where('id', $id)->delete();
            return response()->json(['message' => 'Disabled day removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
