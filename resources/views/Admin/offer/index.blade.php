@extends('Admin.layout')
@section('container')


<div class="row">
    <!-- <h1>Dashboard</h1> -->
    <div class="col-6">
        <p class="card-title">VIEW OFFER</p>
    </div>
    <div class="col-6" style="justify-content: end;padding-bottom:5px; display: flex; align-items: flex-end;">
        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.offer.create')}}" style="text-decoration: none ;font-weight: bold;color:white">ADD OFFER</a></button></p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="example" class=" center display expandable-table table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Code</th>
                        <th scope="col">Value</th>
                        <th scope="col">Type</th>
                        <th scope="col">Minimum Order</th>
                        <th scope="col">One Time</th>

                        <th scope="col">Option</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->code}}</td>
                        <td>{{$data->value}}</td>
                        <td>{{$data->type}}</td>
                        <td>{{$data->min_order_amt}}</td>
                        <td>{{$data->is_one_time}}</td>

                        <td>
                            <a href="{{route('Admin.offer.edit',$data->id)}}"><i style="margin-left: 30px;color:#FFA500;font-weight: bold; font-size: 30px;" class=" bi bi-pencil-square"></i></a> &nbsp;
                            <a href="{{route('Admin.offer.delete',$data->id)}}"><i class="bi bi-trash-fill" style="margin-left: 30px;color:red;font-weight: bold;font-size: 30px;"></i></a>

                            @if($data->status==1)
                            <!-- <a href="{{url('Admin/offer/status/0')}}">
                                <button type="button" class="btn btn-danger">DeActivate</button>
                                <i class="bi bi-hand-thumbs-up" style="margin-left: 30px;color:green;font-weight: bold;font-size: 30px;"></i>DeActivate
                            </a> -->
                            <a href="{{url('Admin/offer/status',$data->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-up" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i>

                                ACTIVATE


                            </a>

                            @elseif($data->status==0)
                            <a href="{{url('Admin/offer/status',$data->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-down" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i>

                                DEACTIVATE


                            </a>


                            @endif



                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





@endsection