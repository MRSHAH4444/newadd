@extends('customers.layout')
@section('user_main')



@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     <p>{{ $message }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
     <strong>Whoops!</strong> {{__('There were some problems with your input')}}.<br><br>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
     </ul>
</div>
@endif

<div class="container-fluid checkout">
     <div class="row">
          <div class="col-md-6">
               <div class="container-fluid ">
                    <div class="row py-5">
                         <div class="col-md-1">
                              <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo.jpg')}}" class="logo"></a>
                         </div>
                         <div class="col-md-12 py-3">
                              <a class="info" href="{{route('customers.viewcart')}}">Cart</a> >
                              <a class="info" href="#">Information</a> >
                              <a class="info" href="#">Shipping</a> >
                              <a class="info" href="#">Payment</a>
                         </div>

                         <div class="row py-2">
                              <div class="col-sm-7">
                                   <h3 class="text-secondary">Address information</h3>
                              </div>
                              <div class="col-sm-5">
                                   <a class="btn reg" href="{{route('customers.address')}}">Add New Address</a>
                              </div>
                         </div>
                         <label for="">select any one <i class="bi bi-arrow-down"></i></label>
                         <div class="col-md-12">
                              <div class="row">
                                   <form action="{{route('customers.checkoutcode')}}" method="post">
                                        @csrf
                                        <!-- <input type="hiddenn" value="{{request('id')}}"> -->
                                        <div class="col-md-12 py-3">
                                             @foreach($add as $add)

                                             <div class="accordion accordion-flush py-2" id="accordionFlushExample">
                                                  <div class="accordion-item">
                                                       <h5 class="accordion-header text-center form-control" id="flush-headingOne">
                                                            <input type="radio" name="address_id" id="add" value="{{$add->id}}" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$add->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            <label for="add">{{$add->city}},{{$add->pin}}</label>
                                                       </h5>
                                                       <div id="flush-collapseOne-{{$add->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                 <table class="table table-bordered">
                                                                      <thead>
                                                                           <tr>
                                                                                <th>Email</th>
                                                                                <td>: {{$add->email}}</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <th>First Name</th>
                                                                                <td>: {{$add->firstname}}</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <th>Address</th>
                                                                                <td>: {{$add->address}}</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <th>City</th>
                                                                                <td>: {{$add->city}}</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <th>Pin Code</th>
                                                                                <td>: {{$add->pin}}</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <th>Phone</th>
                                                                                <td>: {{$add->phone}}</td>
                                                                           </tr>
                                                                      </thead>
                                                                 </table>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                             @endforeach
                                        </div>
                              </div>


                              <div class="row py-5">
                                   <div class="col-md-8 pe-3">
                                        <a href="{{route('customers.viewcart')}}" class="text-dark" style="text-decoration: none;">
                                             < Return to cart</a>

                                   </div>
                                   <div class="col-md-4 pe-3">
                                        <button class="btn reg" type="submit">Continue Shopping</button>
                                   </div>
                                   <div class="col-md-4 pe-3">
                                   </div>
                                   <!-- </form> -->
                                   <div class="card-body text-center">
                                   
                                   </div>
                              </div>
                              <hr>
                              <div class="row">
                                   <div class="col-sm-3"><small><a href="" class="text-dark" style="text-decoration: none;">Refund
                                                  policy</a></small></div>
                                   <div class="col-sm-3"><small><a href="" class="text-dark" style="text-decoration: none;">Shipping policy</a></small></div>
                                   <div class="col-sm-3"><small><a href="" class="text-dark" style="text-decoration: none;">Privacy policy</a></small></div>
                                   <div class="col-sm-3"><small><a href="" class="text-dark" style="text-decoration: none;">Terms
                                                  of service</a></small></div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col">
               <div class="d-flex" style="height: 1000px;">
                    <div class="vr"></div>
               </div>
          </div>
          <div class="col-md-5 ">
               <div class="container-fluid">
                    <div class="row pt-5">
                         <div class="col-md-10 ">
                              <img src="img/cra7.jpg" class="rounded" alt="image" height="100px" width="100px">
                              <label for="pro">African Beasts Artifact (Rustic)</label>
                         </div>
                         <div class="col-md-2 pt-4">₹6,599.00</div>
                    </div>
                    <hr>
                    <div class="row py-2">
                         <div class="col-md-10">
                              <input type="text" class="form-control" id="discount" placeholder="Discount Code">
                         </div>
                         <div class="col-md-2">
                              <button class="btn" disabled>Apply</button>
                         </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between text-muted">
                         <div class="">
                              <label for="subt">Subtotal</label>
                         </div>
                         <div class="">
                              <label for="pr">₹6,599.00</label>
                         </div>
                    </div>
                    <div class="d-flex justify-content-between text-muted">
                         <div class="">
                              <label for="subt">Shipping</label>
                         </div>
                         <div class="">
                              <label for="pr">free</label>
                         </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between text-muted">
                         <div class="">
                              <label for="subt">Total</label><br>
                              <small>Including ₹1,006.63 in taxes</small>
                         </div>
                         <div class="">
                              INR
                              <label for="pr">
                                   <h3 class="text-dark">₹6,599.00</h3>
                              </label>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<br>





@endsection