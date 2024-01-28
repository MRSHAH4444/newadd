<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = offer::all();
        return view('Admin.offer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type= offer::all();
        $is_one_time= offer::all();     
        return view('Admin.offer.create',compact('type','is_one_time'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'value' => 'required',
            'code' => 'required',

        ]);

        $offer =  new offer();
        $offer->status = 1;
        $offer->title = $req->title;
        $offer->value = $req->value;
        $offer->code = $req->code;
        // $offer->status = $req->status;
        $offer->type = $req->type;
        $offer->min_order_amt = $req->min_order_amt;
        $offer->is_one_time = $req->is_one_time;


       
        

        $offer->save();
        return redirect()->back()
            ->with('success', 'offer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = offer::find($id);
        return view('Admin.offer.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, offer $offer)
    {
        $req->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
        $id = $req->id;

        $offer = offer::find($id);

        $offer->title = $req->title;
        $offer->value = $req->value;
        $offer->code = $req->code;
        $offer->status = $req->status;
        $offer->type = $req->type;
        $offer->min_order_amt = $req->min_order_amt;
        $offer->is_one_time = $req->is_one_time;

        $offer->save();
        return redirect()->back()
            ->with('success', 'offer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = offer::find($id);
        $data->delete();
        return redirect('Admin/offer/index')->with('msg', 'offer deleted successfully.');
    }
    // public function status($id,$status)
    // {
    //     $status = offer::find($id);
    //     $data = offer::find($id);
    //     $data->status = $status;
    //     $data->save();
    //     return redirect('Admin/offer/index')->with('msg', 'offer status updated.');
    // }

    public function status($id)
    {

        $status = 1; // set your condition here

        DB::table('offers')
            ->where('id', $id)
            ->update(['status' => $status ? 0 : 1]);

        return redirect()->back()->with('msg', 'Status updated successfully.');
    }
}
