<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\RazorpayPaymentController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('customers.layout');

});

// Route::get('customers/register', function () {
//     return view('customers.register');

// });
    
Route::get('customers/register', [CustomersController::class, 'register'])->name('customers.register');
Route::post('customers/register_code', [CustomersController::class, 'register_code'])->name('customers.register_code');


Route::get('customers/view_product', [CustomersController::class, 'view_product'])->name('customers.view_product');
// Route::get('customers/add_to_cart', [CustomersController::class, 'add_to_cart'])->name('customers.add_to_cart');
Route::get('customers/view_product_details/{id?}', [CustomersController::class, 'view_product_details'])->name('customers.view_product_details');
Route::get('customers/feedback_index', [CustomersController::class, 'feedback_index'])->name('customers.feedback_index');
Route::post('customers/feedback_store', [CustomersController::class, 'feedback_store'])->name('customers.feedback_store');
Route::get('customers/dashboard', [CustomersController::class, 'dashboard'])->name('customers.dashboard');

Route::post('customers/add_to_cart', [CustomersController::class, 'add_to_cart'])->name("customers.add_to_cart");
Route::get('customers/viewcart', [CustomersController::class, "viewcart"])->name("customers.viewcart");
Route::get('customers/cartdelete/{id}', [CustomersController::class, "cartdelete"])->name("customers.cartdelete");
Route::get('customers/checkout', [CustomersController::class, "checkout"])->name("customers.checkout");
Route::post('customers/checkoutcode', [CustomersController::class, "checkoutcode"])->name("customers.checkoutcode");
Route::get('customers/address', [CustomersController::class, "address"])->name("customers.address");
Route::post('customers/addresscode', [CustomersController::class, "addresscode"])->name("customers.addresscode");
// Route::get('customers/checkout', [RazorpayPaymentController::class, 'payment_index'])->name('customers.payment_index');
// Route::post('customers/checkout', [RazorpayPaymentController::class, 'payment_store'])->name('customers.payment_store');


    Route::get('customers/login', [CustomersController::class, 'index'])->name('customers.login');
    Route::post('customers/auth', [CustomersController::class, 'auth'])->name('customers.auth');

    Route::get('customers/layout', [CustomersController::class, 'layout'])->name('customers.layout');

    Route::group(['middleware' => 'customers_auth'], function () {

    
    Route::get('customers/customers/index', [CustomersController::class, 'index'])->name('customers.customers.index');

    Route::get('customers/updatepassword', [CustomersController::class, 'updatepassword']);
});

//Admin start

Route::get('/', function () {
    return view('Admin.layout');
    
    });
    
    Route::get('Admin/login', [admincontroller::class, 'index'])->name('Admin.login');
    Route::post('Admin/auth', [admincontroller::class, 'auth'])->name('Admin.auth');
    
    Route::get('Admin/layout', [admincontroller::class, 'layout'])->name('Admin.layout');
    
    Route::group(['middleware' => 'Admin_auth'], function () {
    
     Route::get('Admin/dashboard', [admincontroller::class, 'dashboard'])->name('Admin.dashboard');
    Route::get('Admin/Admin/index', [admincontroller::class, 'index'])->name('Admin.Admin.index');
    
    //Route::get('Admin/updatepassword', [admincontroller::class, 'updatepassword']);
    
});
    



    //category start
    Route::get('Admin/category/index', [CategoryController::class, 'index'])->name('Admin.category.index');
    Route::get('Admin/category/create', [CategoryController::class, 'create'])->name('Admin.category.create');
    Route::post('Admin/category/store', [CategoryController::class, 'store'])->name('Admin.category.store');
    Route::get('Admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('Admin.category.edit');
    Route::post('Admin/category/update', [CategoryController::class, 'update'])->name('Admin.category.update');
    Route::get('Admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('Admin.category.delete');

    //category end


    //subcategory start
    Route::get('Admin/subcategory/index', [SubcategoryController::class, 'index'])->name('Admin.subcategory.index');
    Route::get('Admin/subcategory/create', [SubcategoryController::class, 'create'])->name('Admin.subcategory.create');
    Route::post('Admin/subcategory/store', [SubcategoryController::class, 'store'])->name('Admin.subcategory.store');
    Route::get('Admin/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('Admin.subcategory.edit');
    Route::post('Admin/subcategory/update', [SubcategoryController::class, 'update'])->name('Admin.subcategory.update');
    Route::get('Admin/subcategory/delete/{id}', [SubcategoryController::class, 'delete'])->name('Admin.subcategory.delete');
    
    Route::get('Admin/index_feedback', [admincontroller::class, 'index_feedback'])->name('Admin.index_feedback');
    Route::get('Admin/index_feedback_delete/{id}', [admincontroller::class, 'index_feedback_delete'])->name('Admin.index_feedback_delete');

    //subcategory end



    //offer start
    Route::get('Admin/offer/index', [OfferController::class, 'index'])->name('Admin.offer.index');
    Route::get('Admin/offer/create', [OfferController::class, 'create'])->name('Admin.offer.create');
    Route::post('Admin/offer/store', [OfferController::class, 'store'])->name('Admin.offer.store');
    Route::get('Admin/offer/edit/{id}', [OfferController::class, 'edit'])->name('Admin.offer.edit');
    Route::post('Admin/offer/update', [OfferController::class, 'update'])->name('Admin.offer.update');
    Route::get('Admin/offer/delete/{id}', [OfferController::class, 'delete'])->name('Admin.offer.delete');
    // Route::get('Admin/offer/status/{status}/{id}', [OfferController::class, 'status']);
    Route::get('Admin/offer/status/{id}', [OfferController::class, 'status']);

    //offer end

    // size start

    Route::get('Admin/size/index', [SizeController::class, 'index'])->name('Admin.size.index');
    Route::get('Admin/size/create', [SizeController::class, 'create'])->name('Admin.size.create');
    Route::post('Admin/size/store', [SizeController::class, 'store'])->name('Admin.size.store');
    Route::get('Admin/size/edit/{id}', [SizeController::class, 'edit'])->name('Admin.size.edit');
    Route::post('Admin/size/update', [SizeController::class, 'update'])->name('Admin.size.update');
    Route::get('Admin/size/delete/{id}', [SizeController::class, 'delete'])->name('Admin.size.delete');

    //size end

    // color start

    Route::get('Admin/color/index', [ColorController::class, 'index'])->name('Admin.color.index');
    Route::get('Admin/color/create', [ColorController::class, 'create'])->name('Admin.color.create');
    Route::post('Admin/color/store', [ColorController::class, 'store'])->name('Admin.color.store');
    Route::get('Admin/color/edit/{id}', [ColorController::class, 'edit'])->name('Admin.color.edit');
    Route::post('Admin/color/update', [ColorController::class, 'update'])->name('Admin.color.update');
    Route::get('Admin/color/delete/{id}', [ColorController::class, 'delete'])->name('Admin.color.delete');

    //color end


    // product start

    Route::get('Admin/product/index', [ProductController::class, 'index'])->name('Admin.product.index');
    Route::get('Admin/product/create', [ProductController::class, 'create'])->name('Admin.product.create');
    Route::post('Admin/product/store', [ProductController::class, 'store'])->name('Admin.product.store');
    Route::get('Admin/product/edit/{id}', [ProductController::class, 'edit'])->name('Admin.product.edit');
    Route::post('Admin/product/update', [ProductController::class, 'update'])->name('Admin.product.update');
    Route::get('Admin/product/delete/{id}', [ProductController::class, 'delete'])->name('Admin.product.delete');
    Route::get('Admin/product/status/{status}/{id}', [ProductController::class, 'status']);

    //product end

    

    // customer start

    Route::get('Admin/addcustomer/index', [CustomerController::class, 'index'])->name('Admin.addcustomer.index');
    Route::get('Admin/addcustomer/create', [CustomerController::class, 'create'])->name('Admin.addcustomer.create');
    Route::post('Admin/addcustomer/store', [CustomerController::class, 'store'])->name('Admin.addcustomer.store');
    Route::get('Admin/addcustomer/edit/{id}', [CustomerController::class, 'edit'])->name('Admin.addcustomer.edit');
    Route::post('Admin/addcustomer/update', [CustomerController::class, 'update'])->name('Admin.addcustomer.update');
    Route::get('Admin/addcustomer/delete/{id}', [CustomerController::class, 'delete'])->name('Admin.addcustomer.delete');

    //customer end 





  //Admin logout start
  Route::get('Admin/logout', function () {
    session()->forget('Admin_login');
    session()->forget('Admin_id');
    session()->has('error', 'Logout sucessfully');
    return redirect('/Admin/layout');
    //return view('Admin.layout');
});
//Admin logout end

// // Admin end 


//     //admin start


// Route::get('/', function () {
//     return view('admin.layout');
// });

//     // Route::get('/admin/login', function () {
//     //     return view('admin/login');
//     // });

//  Route::get('admin/login', [admincontroller::class, 'index'])->name('admin.login');
//  Route::post('admin/auth', [admincontroller::class, 'auth'])->name('admin.auth');

//  Route::get('admin/layout', [admincontroller::class, 'layout'])->name('admin.layout');

//  Route::group(['middleware' => 'Admin_auth'], function () {

//     Route::get('admin/dashboard', [admincontroller::class, 'dashboard'])->name('admin.dashboard');
//   //  Route::get('admin/manager/index', [ManagerController::class, 'index'])->name('admin.manager.index');

//     //Route::get('admin/updatepassword', [admincontroller::class, 'updatepassword']);

// //addmanager start
// Route::get('admin/addmanager/index', [AddmanagerController::class, 'index'])->name('admin.addmanager.index');
// Route::get('admin/addmanager/create', [AddmanagerController::class, 'create'])->name('admin.addmanager.create');
// Route::post('admin/addmanager/store', [AddmanagerController::class, 'store'])->name('admin.addmanager.store');
// Route::get('admin/addmanager/edit/{id}', [AddmanagerController::class, 'edit'])->name('admin.addmanager.edit');
// Route::post('admin/addmanager/update', [AddmanagerController::class, 'update'])->name('admin.addmanager.update');
// Route::get('admin/addmanager/delete/{id}', [AddmanagerController::class, 'delete'])->name('admin.addmanager.delete');


// //addmanager end

// Route::get('admin/category_index_admin', [adminController::class, 'category_index_admin'])->name('admin.category_index_admin');
// Route::get('admin/subcategory_index_admin', [adminController::class, 'subcategory_index_admin'])->name('admin.subcategory_index_admin');
// Route::get('admin/product_index_admin', [adminController::class, 'product_index_admin'])->name('admin.product_index_admin');
// Route::get('admin/offer_index_admin', [adminController::class, 'offer_index_admin'])->name('admin.offer_index_admin');
// // Route::get('admin/feedback_delete_admin/{id}', [adminController::class, 'feedback_delete_admin'])->name('admin.feedback_delete_admin');
// // Route::get('admin/manager_edit_admin/{id}', [adminController::class, 'manager_edit_admin'])->name('admin.manager_edit_admin');
// // Route::get('admin/manager_create_admin', [adminController::class, 'manager_create_admin'])->name('admin.manager_create_admin');
// // Route::post('admin/manager_store_admin', [adminController::class, 'manager_store_admin'])->name('admin.manager_store_admin');
// // Route::get('admin/manager_index_admin', [adminController::class, 'manager_index_admin'])->name('admin.manager_index_admin');
// // Route::get('admin/manager_delete_admin/{id}', [adminController::class, 'manager_delete_admin'])->name('admin.manager_delete_admin');
// // Route::post('admin/manager_update_admin', [adminController::class, 'manager_update_admin'])->name('admin.manager_update_admin');


// });


