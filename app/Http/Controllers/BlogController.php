<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogCategoryMap;
use App\Models\Destination;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog.index', ['data' => Blog::all(['id', 'title', 'header_image_path', 'primary_media_path', 'created_by', 'isVisible'])]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        try {
            $filePath = null;
            $mediaPath = null;
            if (isset($request->header_image)) {
                $fileName = $request->header_image->getClientOriginalName();
                $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                $filePath = $request->header_image->storeAs(Blog::$imagePath, $fileName, 'public');
            }
            if (isset($request->primary_media)) {
                $fileName = $request->primary_media->getClientOriginalName();
                $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                $mediaPath = $request->primary_media->storeAs(Blog::$mediaPath, $fileName, 'public');
            }
            $blog = Blog::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'header_image_path' => $filePath,
                'primary_media_path' => $mediaPath,
                'content' => $request->content,
                'created_by' => $request->created_by,
                'isVisible' => $request->isVisible == 'on',
            ]);
            return redirect()->route('backend.blog.index');
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $id = Crypt::decrypt($id);
            return view('backend.blog.form', [
                'data' => Blog::find($id),
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        try {
            $blog = Blog::find(Crypt::decrypt($id));
            $filePath = null;
            $mediaPath = null;
            $categories = $request->category;
            if (isset($request->header_image)) {
                $fileName = $request->header_image->getClientOriginalName();
                $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                $filePath = $request->header_image->storeAs(Blog::$imagePath, $fileName, 'public');
                Storage::disk('public')->delete($blog->header_image_path);
                $blog->header_image_path = $filePath;
            }
            if (isset($request->primary_media)) {
                $fileName = $request->primary_media->getClientOriginalName();
                $fileName = File::name($fileName) . '_' . time() . '.' . File::extension($fileName);
                $mediaPath = $request->primary_media->storeAs(Blog::$mediaPath, $fileName, 'public');
                Storage::disk('public')->delete($blog->primary_media_path);
                $blog->primary_media_path = $mediaPath;
            }
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title);
            $blog->content = $request->content;
            $blog->created_by = $request->created_by;
            $blog->isVisible = $request->isVisible == 'on';
            $blog->save();
            
            return redirect()->route('backend.blog.index');
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
            Blog::where('id', $id)->delete();
            return response()->json(['message' => 'Blog removed successfully']);
        } catch (\Throwable $th) {
            //throw $th;
            Log::critical($th);
            abort(404);
        }
    }
}