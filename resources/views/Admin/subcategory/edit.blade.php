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
                        <p class="card-title">EDIT SUBCATEGORY</p>
                    </div>
                    <div class="col-6" style="justify-content: end; display: flex; align-items: flex-end;">
                        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.subcategory.index')}}" style="text-decoration: none ;font-weight: bold;color:white">VIEW CATEGORY</a></button></p>
                    </div>
                </div>

                <form class="forms-sample" action="{{route('Admin.subcategory.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}" />
                    <div class="form-group">
                        <label for="exampleInputName1">SubCategory Name</label>
                        <input type="text" class="form-control" value="{{$data->ps_category_name}}" id="exampleInputName1" name="ps_category_name">
                    </div>

                    <div class="form-group">

                        <select id="exampleInputName1" name="category_id" class="form-control" required>
                            <option>Category</option>
                            @foreach($category as $category)
                            <option value="{{$category->id}}"> {{$category->category_name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <!-- <label>image</label> -->
                        <label for="image">{{__('Image')}}:</label>
                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo">


                    </div>



                    <button type="submit" class="btn btn-primary mr-2">EDIT SUBCATEGORY</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection