@extends('customers.layout')
@section('user_main')




<div class="container pt-5 mt-5">

<div class="card shadow mb-4">
          <div class="card-header py-3">
               <h5 class="m-0 font-weight-bold text-success">Your Cart</h5>
          </div>
          <div class="card-body">

               <div class="row">
                    @php
                    $total=1;
                    $gtot=0;
                    @endphp

                    @foreach($product as $product)

                    <div class="col-12-12">
                         <div class="row">
                              <div class="col-sm-2">
                                   <!-- <img src="{{url('proimg')}}/{{$product->image}}" style="height: 150px; width: 150px;" class="h1"> -->
                                   <img src="{{url('product')}}/{{$product->image}}" class="img-thumbnail img-fluid" alt="">
                              </div>
                              <div class="col-sm-6">
                                   <b>{{$product->product_name}}</b> <br>

                                   <span class="pt-2 d-flex justify-content-start">
                                        <!-- <small class="px-2"><strike> ₹. 10000.00 </strike></small> -->
                                        <h5>₹{{$product->product_cost}}</h5>
                                   </span>
                                   <div class="">
                                        <span class="">Product Quantity : <b>{{$product->qty}}</b></span> <br>
                                   </div>
                                   <div class="pt-2">
                                        <a class="text-danger" href="{{route('customers.cartdelete',$product->c_id)}}">Remove</a>
                                   </div>
                              </div>
                              <div class="col-md-4">

                              </div>
                         </div>
                         <hr>
                    </div>
                    @php
                    $total=$product->product_cost * $product->qty;
                    $gtot = $gtot + $total;
                    @endphp

                    @endforeach
           
               </div>
          </div>
     </div>

                    @if($gtot == 0)
                    <p class="text-center">Your Cart Is Empty <i class="bi bi-wind text-primary"></i></p>
                    <div class="d-flex justify-content-center ">
                         <a href="{{route('customers.view_product')}}" class="btn reg" style="width: 200px;">Go to The Shop Now</a>
                    </div>
                    @else

                    <div class="d-flex justify-content-between shadow p-3 mb-0 bg-body rounded sticky-bottom">
                         <b class="h3"> ₹. {{$gtot}} </b>
                         <a href="{{route('customers.checkout')}}" class="btn btn-primary" style="width: 180px;">Order Now</a>
                    </div>
                    @endif



     <div class="container py-5">
          <h3 class="py-2">You may also like</h3>
          <div class="row">
               @foreach($random as $random)
               <div class="col-md-3">
                    <!-- <img src="{{url('proimg')}}/{{$random->image}}" data-aos="zoom-in" height="300" width="300" alt="images"> -->
                    <img src="{{url('product')}}/{{$random->image}}" class="img-thumbnail img-fluid" alt="">
                    <p class="">{{$random->name}}</p>
               </div>
               @endforeach
          </div>
     </div>


</div>



@endsection