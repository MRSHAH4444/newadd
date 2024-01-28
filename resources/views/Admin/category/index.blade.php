@extends('Admin.layout')
@section('container')


<div class="row">
    <!-- <h1>Dashboard</h1> -->
    <div class="col-6">
        <p class="card-title">VIEW CATEGORY</p>
    </div>
    <div class="col-6" style="justify-content: end;padding-bottom:5px; display: flex; align-items: flex-end;">
        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.category.create')}}" style="text-decoration: none ;font-weight: bold;color:white">ADD CATEGORY</a></button></p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover" style="width:100%;color: black;">
                <thead>
                    <tr>
                        <th scope="col">category_name</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Option</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>

                        <td>{{$data->category_name}}</td>
                        <td><img src="{{url('category')}}/{{$data->photo}}" style="width:100px;height:100px"></td>

                        <td><a href="{{route('Admin.category.edit',$data->id)}}">
                                <i style="margin-left: 25px;color:#FFA500;font-weight: bold; font-size: 30px;" class=" bi bi-pencil-square">
                                </i>
                            </a> &nbsp;
                            <a href="{{route('Admin.category.delete',$data->id)}}"><i class="bi bi-trash-fill" style="color:red;font-weight: bold;font-size: 30px;"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





@endsection