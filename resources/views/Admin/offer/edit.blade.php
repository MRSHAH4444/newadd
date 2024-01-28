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
                        <p class="card-title">EDIT OFFER</p>
                    </div>
                    <div class="col-6" style="justify-content: end; display: flex; align-items: flex-end;">
                        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.offer.index')}}" style="text-decoration: none ;font-weight: bold;color:white">VIEW OFFER</a></button></p>
                    </div>
                </div>

                <form class="forms-sample" action="{{route('Admin.offer.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}" />
                    <div class="form-group">
                        <label for="exampleInputName1">TITLE</label>
                        <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputName1" name="title">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName1">CODE</label>
                        <input type="text" class="form-control" value="{{$data->code}}" id="exampleInputName1" name="code">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputName1">VALUE</label>
                        <input type="text" class="form-control" value="{{$data->value}}" id="exampleInputName1" name="value">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName1">TYPE</label>
                        <select id="exampleInputName1" name="type" class="form-control">

                            @if($type == 'value')
                            <option value="value" selected>value</option>
                            <option value="per">per</option>
                            @elseif($type == 'per')
                            <option value="value">value</option>
                            <option value="per" selected>per</option>
                            @else
                            <option value="value">value</option>
                            <option value="per">per</option>

                            @endif
                        </select>

                    </div>




                    <div class="form-group">
                    <label for="exampleInputName1">MIN ORDER AMT</label>
                       
                        <input type="text" class="form-control" id="exampleInputName1" name="min_order_amt">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName1">IS ONE TIME</label>
                        <select id="exampleInputName1" name="is_one_time" class="form-control">

                            @if($is_one_time == '1')
                            <option value="1" selected>Yes</option>
                            <option value="0">No</option>
                            @elseif($is_one_time == '0')
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>
                            @else
                            <option value="1">Yes</option>
                            <option value="0">No</option>

                            @endif
                        </select>
                    </div>



                    <!-- <div class="form-group">
                         <label>image</label> 
                        <label for="image">{{__('Image')}}:</label>
                        <input type="file" accept='image/*' value="{{$data->photo}}" onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo">


                    </div> -->




                    <button type="submit" class="btn btn-primary mr-2">EDIT OFFER</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection