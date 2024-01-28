<?php

namespace App\Http\Controllers;

use App\Models\Addmanagers;
use Illuminate\Http\Request;
use App\Models\manager;


class AddmanagersController extends Controller
{
    public function index()
    {
        $data = manager::all();
        return view('admin.addmanager.index', compact('data'));

        // return view('manager.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addmanager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'email' => 'required | unique:managers',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'Contactno' => 'required',
            //'photo' => 'required',

        ]);

        $manager =  new manager();
        $manager->firstname = $req->firstname;
        $manager->lastname = $req->lastname;
        $manager->email = $req->email;
        $manager->password = $req->password;
        $manager->Contactno = $req->Contactno;

        // // $package->category_id = $req->category_id;



        $manager->save();
        return redirect()->back()
            ->with('success', 'manager created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = manager::find($id);
        return view('admin.addmanager.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, manager $manager)
    {

        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'Contactno' => 'required',


        ]);
        $id = $req->id;

        $manager = manager::find($id);

        $manager->firstname = $req->firstname;
        $manager->lastname = $req->lastname;
        $manager->email = $req->email;
        $manager->password = $req->password;
        $manager->Contactno = $req->Contactno;

        // // $category->photo = $req->photo;
        // $category->photo = time() . '.' . $req->photo->extension();
        // $req->photo->move(public_path('category'), $category->photo);

        $manager->save();
        return redirect()->back()
            ->with('success', 'manager updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = manager::find($id);
        $data->delete();
        return redirect('admin/addmanager/index')->with('msg', 'manager deleted successfully.');
    }
}


