<?php

namespace App\Http\Controllers;

use App\Http\Requests\DisabledDateRequest;
use App\Models\DisabledDate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class DisabledDateController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.date.index', ['data' => DisabledDate::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.date.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisabledDateRequest $request)
    {
        try {
            DisabledDate::create($request->all());
            return redirect()->route('backend.date.index');
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
            DisabledDate::where('id', $id)->delete();
            return response()->json(['message' => 'Disabled date removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}
