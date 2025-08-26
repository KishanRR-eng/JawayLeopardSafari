<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCategoryRequest;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog-category.index', ['data' => BlogCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCategoryRequest $request)
    {
        try {
            BlogCategory::create([
                'name' => $request->name,
                'isVisible' => $request->isVisible == 'on',
            ]);
            return redirect()->route('backend.blog.category.index');
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
        try {
            $id = Crypt::decrypt($id);
            return view('backend.blog-category.form', ['data' => BlogCategory::find($id)]);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogCategoryRequest $request, $id)
    {
        try {
            $blogCategory = BlogCategory::find(Crypt::decrypt($id));
            $blogCategory->name = $request->name;
            $blogCategory->isVisible = $request->isVisible == 'on';
            $blogCategory->save();
            return redirect()->route('backend.blog.category.index');
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
            BlogCategory::where('id', $id)->delete();
            return response()->json(['message' => 'Blog category removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}