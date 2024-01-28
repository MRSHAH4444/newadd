@extends('customers.layout')
@section('user_main')


<section class="inner-pages py-5">
         <div class="container py-xl-5 py-sm-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 mt-5"></h3>
            <!-- forms -->
            <section class="typo-section py-4 border-top border-bottom">
               <h3 class="typo-main-heading mb-lg-4 mb-3 pr-3 pb-1 mt-5">ADDRESS</h3>
               
               <!-- form1 -->

               <h4 class="typo-sub-heading mt-4 mb-3"></h4>
               <form action="{{route('customers.addresscode')}}" method="post">
                  @csrf
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label"> FIRST NAME</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="firstname" placeholder="Email">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label"> email</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                     </div>
                  </div>


                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">city</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="city" id="inputPassword3" placeholder="Password">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">state</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="state" id="inputPassword3" placeholder="Password">
                     </div>
                  </div>

                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">pin</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="pin" id="inputPassword3" placeholder="Password">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">phone</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" id="inputPassword3" placeholder="Password">
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">address</label>
                     <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" name="email" id="inputPassword3" placeholder="Password"> -->
                        <textarea name="address" id="" cols="107" rows="10"></textarea>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">ADD </button>
                     </div>
                  </div>
               </form>
               <!--// form2 -->
            </section>
      



@endsection