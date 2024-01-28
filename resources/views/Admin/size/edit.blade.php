@extends('Admin.layout')
@section('container')
<div class="row">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <p class="card-title">EDIT SIZE</p>
                </div>
                <div class="col-6" style="justify-content: end; display: flex; align-items: flex-end;">
                    <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.size.index')}}" style="text-decoration: none ;font-weight: bold;color:white">VIEW SIZE</a></button></p>
                </div>
            </div>
           
            <form class="forms-sample" action="{{route('Admin.size.update')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}" />
                <div class="form-group">
                    <label for="exampleInputName1">Size</label>
                    <input type="text" class="form-control" value="{{$data->size}}" id="exampleInputName1" name="size">
                </div>
               

                

                

               
               
                
                <button type="submit" class="btn btn-primary mr-2">EDIT SIZE</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

</div>

@endsection
