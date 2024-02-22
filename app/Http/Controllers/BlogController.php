<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate();

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        // Validate the request
        $validatedData = $request->validated();

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/blog'), $imageName);

        $blog = new Blog();
        $blog->name = $validatedData['name'];
        $blog->title = $validatedData['title'];
        $blog->description = $validatedData['description'];
        $blog->image = $imageName; // Remove 'public/' from the image path
        $blog->save();

        // Redirect or return a response
        return redirect('/admin/blog')->with('success', 'Blog post created successfully');
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
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $validatedData = $request->validated();
        $blog = Blog::findOrFail($id);
        $blog->name = $validatedData['name'];
        $blog->title = $validatedData['title'];
        $blog->description = $validatedData['description'];

        if ($request->hasFile('image')) {

            if (file_exists('images/blog/' . $blog->image)) {
                unlink('images/blog/' . $blog->image);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/blog'), $imageName);

            $blog->image = $imageName;
        }
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog->delete()) {
            if (file_exists('images/blog/' . $blog->image)) {
                unlink('images/blog/' . $blog->image);
            }
            return response()->json([
                'success' => true,
            ]);
        }
        return response()->json([
            'success' => false,
        ]);
    }
}
