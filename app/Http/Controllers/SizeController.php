<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = size::all();
        return view('Admin.size.index', compact('data'));

        // return view('Admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'size' => 'required | unique:sizes',
          

        ]);

        $size =  new size();
        $size->size = $req->size; 
        $size->save();
        return redirect()->back()
            ->with('success', 'size created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = size::find($id);
        return view('Admin.size.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, size $size)
    {

        $req->validate([
            'size' => 'required',
        ]);
        $id = $req->id;

        $size = size::find($id);
        $size->size = $req->size;

        $size->save();
        return redirect()->back()
            ->with('success', 'size updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = size::find($id);
        $data->delete();
        return redirect('Admin/size/index')->with('msg', 'size deleted successfully.');
    }
}
