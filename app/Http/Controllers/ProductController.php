<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\UploadedFil;


use App\Models\product;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use App\Models\size;
use App\Models\color;
use App\Models\product_attribute;


class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::all();
        return view('Admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
          
        $subcategory = subcategory::all();
        $category = category::all();
        $color = color::all();
        $size = size::all();
        $is_promo= product::all();
        $is_featured= product::all();
        $is_tranding= product::all();
        $is_discounted= product::all();
        $si = size::all();
        $col = color::all();

   

        return view('Admin.product.create', compact('category','subcategory', 'color', 'size','si','col','is_promo','is_featured','is_tranding','is_discounted'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        
        $req->validate([

            'category_id' => 'required',
            'ps_category_id' => 'required',
            'product_name' => 'required',
            'short_description' => 'required',
            'product_discription' => 'required',
            'keywords' => 'required',


        ]);
        // $is_promo =  new product();
        // $is_promo -> yes; 
        $product =  new product();

        // if ($req->hasFile('image')) {
        //     $file = $req->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move(public_path('product'), $filename);
        // }



        //  $product->image = 'test';
        

        $product->product_name = $req->product_name;
        $product->short_description = $req->short_description;
        $product->product_discription = $req->product_discription;
        $product->image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('product'), $product->image);
        $product->product_cost = $req->product_cost;
        $product->QOH = $req->QOH;
        $product->lead_time = $req->lead_time;
        $product->tax = $req->tax;
        $product->tax_type = $req->tax_type;
        $product->is_promo = $req->is_promo;
        $product->is_featured = $req->is_featured;
        $product->is_discounted = $req->is_discounted;
        $product->is_tranding = $req->is_tranding;
        $product->ps_category_id = $req->ps_category_id;
        $product->category_id = $req->category_id;
        
            
        //$product->status = 1;


        $product->save();
        $product_id = $product->id;

        /*Product attribute start*/

        // $skuArr = $req->post('SKU');

        $mrpArr = $req->post('MRP');
        $priceArr = $req->post('price');
        $qtyArr = $req->post('qty');
        // $size_idArr = $req->post('size_id');
        // $color_idArr = $req->post('color_id');
        foreach ($qtyArr as $key => $val) {
            $productAttrArr['product_id'] = $product_id;

            if ($req->hasFile("photo.$key")) {
                $photo = $req->file("photo.$key");
                $ext = $photo->extension();
                $image_name = time() . '.' . $ext;
                $req->file("photo.$key")->storeAs('/public/product', $image_name);
                $productAttrArr['photo'] = $image_name;
            }

            $productAttrArr['MRP'] = $mrpArr[$key];
            $productAttrArr['price'] = $priceArr[$key];
            $productAttrArr['qty'] = $qtyArr[$key];
            // $productAttrArr['color_id'] = $color_idArr[$key];
            // $productAttrArr['size_id'] = $size_idArr[$key];

            DB::table('product_attribute')->insert($productAttrArr);
        }
        /*Product attribute end*/

        return redirect()->back()->with('success', 'product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = product::find($id);
        // $subcategory = subcategory::all();
        // $color = color::all();
        // $size = size::all();
        
        // return view('Admin.product.edit', compact('data', 'subcategory', 'color', 'size'));
        $subcategory = subcategory::all();
        $category = category::all();
        $color = color::all();
        $size = size::all();
        $is_promo= product::all();
        $is_featured= product::all();
        $is_tranding= product::all();
        $is_discounted= product::all();
        $si = size::all();
        $col = color::all();

        return view('Admin.product.edit', compact('data','subcategory', 'color', 'size','si','col','is_promo','is_featured','is_tranding','is_discounted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, product $product)
    {
        $req->validate([
            'ps_category_id' => 'required',
            'category_id' => 'required',
            'product_name' => 'required',
            // 'brand' => 'required',
            // 'short_description' => 'required',
            // 'description' => 'required',

        ]);
        $id = $req->id;

        $product = product::find($id);

        $product->product_name = $req->product_name;
        $product->short_description = $req->short_description;
        $product->product_discription = $req->product_discription;
        $product->image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('product'), $product->image);
        $product->product_cost = $req->product_cost;
        $product->QOH = $req->QOH;
        $product->lead_time = $req->lead_time;
        $product->tax = $req->tax;
        $product->tax_type = $req->tax_type;
        $product->is_promo = $req->is_promo;
        $product->is_featured = $req->is_featured;
        $product->is_discounted = $req->is_discounted;
        $product->is_tranding = $req->is_tranding;
        $product->ps_category_id = $req->ps_category_id;
        $product->category_id = $req->category_id;
        


        // $productAttrArr = array(); // declare and initialize the variable as an empty array
        // $productAttrArr = DB::table('product_attribute')->where(['product_id' => $id])->get(); // assign the database query result to the variable
        // $product['productAttrArr'] = $productAttrArr; // assign the variable to the $product array element

        // $productAttrArr[0]['product_id'] = ' ';
        // // $product['productAttrArr'][0]['SKU'] = '';
        // $productAttrArr[0]['MRP'] = ' ';
        // $productAttrArr[0]['qty'] = ' ';
        // $productAttrArr[0]['price'] = ' ';
        // $productAttrArr[0]['color_id'] = ' ';
        // $productAttrArr[0]['size_id'] = ' ';





        $product_id = $product->id;

        /*Product attribute start*/

        $mrpArr = $req->post('MRP');
        $priceArr = $req->post('price');
        $qtyArr = $req->post('qty');
        $size_idArr = $req->post('size_id');
        $color_idArr = $req->post('color_id');
        foreach ($mrpArr as $key => $val) {
            $productAttrArr['product_id'] = $product_id;

            if ($req->hasFile("photo.$key")) {
                $photo = $req->file("photo.$key");
                $ext = $photo->extension();
                $image_name = time() . '.' . $ext;
                $req->file("photo.$key")->storeAs('/public/product', $image_name);
                $productAttrArr['photo'] = $image_name;
            }


            $productAttrArr['MRP'] = $mrpArr[$key];
            $productAttrArr['price'] = $priceArr[$key];
            $productAttrArr['qty'] = $qtyArr[$key];
            $productAttrArr['color_id'] = $color_idArr[$key];
            $productAttrArr['size_id'] = $size_idArr[$key];

            DB::table('product_attribute')->insert($productAttrArr);
        }
        /*Product attribute end*/

        /*product Attribute update start*/
        $product->save();
        return redirect()->back()
            ->with('success', 'product updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect('Admin/product/index')->with('msg', 'product deleted successfully.');
    }
    // public function status($id, $status)
    // {
    //     $status = product::find($id);
    //     $data = product::find($id);
    //     $data->status = $status;
        
    //     $data->save();
    //     return redirect('Admin/product/index')->with('msg', 'product status updated.');
    // }
    
}
