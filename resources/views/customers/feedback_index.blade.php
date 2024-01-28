@extends('customers.layout')
@section('user_main')


<section class="inner-pages py-5">
         <div class="container py-xl-5 py-sm-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 mt-5"></h3>
            <!-- forms -->
            <section class="typo-section py-4 border-top border-bottom">
               <h3 class="typo-main-heading mb-lg-4 mb-3 pr-3 pb-1 mt-5">FEEDBACK</h3>
               
               <!-- form1 -->

               <h4 class="typo-sub-heading mt-4 mb-3"></h4>
               <form action="{{route('customers.feedback_store')}}" method="post">
                  @csrf
                  <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">NAME</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">email</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="inputPassword3" placeholder="Password">
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="inputPassword3" class="col-sm-2 col-form-label">MESSAGE</label>
                     <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" name="email" id="inputPassword3" placeholder="Password"> -->
                        <textarea name="msg" id="" cols="107" rows="10"></textarea>
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">give feedback</button>
                     </div>
                  </div>
               </form>
               <!--// form2 -->
            </section>
      



@endsection