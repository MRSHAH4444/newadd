<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use Illuminate\Http\Request;
use App\Models\category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = subcategory::all();

        return view('Admin.subcategory.index', compact('data'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = category::all();
        return view('Admin.subcategory.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'ps_category_name' => 'required | unique:subcategories',
            'category_id' => 'required',

        ]);

        $subcategory =  new subcategory();
        $subcategory->ps_category_name = $req->ps_category_name;
        $subcategory->category_id = $req->category_id;


        $subcategory->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('subcategory'), $subcategory->photo);


        $subcategory->save();
        return redirect()->back()
            ->with('success', 'Subcategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = subcategory::find($id);
        $category = category::all();
        return view('Admin.subcategory.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $req->validate([
            'ps_category_name' => 'required',
            'category_id' => 'required',
        ]);

        $id = $req->id;

        $subcategory = subcategory::find($id);

        $subcategory->ps_category_name = $req->ps_category_name;
        $subcategory->category_id = $req->category_id;
        // $subcategory->photo = $req->photo;
        $subcategory->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('subcategory'), $subcategory->photo);


        $subcategory->save();
        return redirect()->back()
            ->with('success', 'subcategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = subcategory::find($id);
        $data->delete();
        return redirect('Admin/subcategory/index')->with('msg', 'Subcategory deleted successfully.');
    }
}
