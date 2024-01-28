<?php

namespace App\Http\Controllers;

use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = color::all();
        return view('Admin.color.index', compact('data'));

        // return view('Admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'color' => 'required | unique:colors',
          

        ]);

        $color =  new color();
        $color->color = $req->color; 
        $color->save();
        return redirect()->back()
            ->with('success', 'color created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = color::find($id);
        return view('Admin.color.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, color $color)
    {

        $req->validate([
            'color' => 'required',
        ]);
        $id = $req->id;
        

        $color = color::find($id);
        $color->color = $req->color;

        $color->save();
        return redirect()->back()
            ->with('success', 'color updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = color::find($id);
        $data->delete();
        return redirect('Admin/color/index')->with('msg', 'color deleted successfully.');
    }
}
