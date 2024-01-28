<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = category::all();
        return view('Admin.category.index', compact('data'));

        // return view('Admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'category_name' => 'required | unique:categories',
            'photo' => 'required',

        ]);

        $category =  new category();
        $category->category_name = $req->category_name;
        // // $package->category_id = $req->category_id;

        $category->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('category'), $category->photo);


        $category->save();
        return redirect()->back()
            ->with('success', 'category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = category::find($id);
        return view('Admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, category $category)
    {

        $req->validate([
            'category_name' => 'required',
        ]);
        $id = $req->id;

        $category = category::find($id);

        $category->category_name = $req->category_name;
        // $category->photo = $req->photo;
        $category->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('category'), $category->photo);

        $category->save();
        return redirect()->back()
            ->with('success', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect('Admin/category/index')->with('msg', 'category deleted successfully.');
    }
}
