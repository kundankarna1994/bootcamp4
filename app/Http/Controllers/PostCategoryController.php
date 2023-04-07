<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostCategoryRequest;
use App\Http\Requests\UpdatePostCategoryRequest;
use App\Models\PostCategory;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = PostCategory::withCount('posts')->get();
        return view("categories.index",[
            'records' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostCategoryRequest $request)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($data["title"]);
        $model = PostCategory::create($data);
        return redirect()->route("categories.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(PostCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCategory $category)
    {
        return view("categories.edit",[
            'model' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostCategoryRequest $request, PostCategory $category)
    {
        $data = $request->all();
        $data["slug"] = Str::slug($data["title"]);
        $category->update($data);
        return redirect()->route("categories.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $category)
    {
        $category->delete();
        return redirect()->route("categories.index");
    }
}
