@extends('admin.layout')
@section('container')


<div class="row">
    <!-- <h1>Dashboard</h1> -->
    <div class="col-6">
        <p class="card-title">VIEW OFFER</p>
    </div>
    <div class="col-6" style="justify-content: end;padding-bottom:5px; display: flex; align-items: flex-end;">
        <!-- <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('manager.offer.create')}}" style="text-decoration: none ;font-weight: bold;color:white">ADD OFFER</a></button></p> -->
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

                        <!-- <th scope="col">Option</th> -->

                    </tr>
                </thead>
                <tbody>
                    @foreach($odata as $odata)
                    <tr>
                        <td>{{$odata->title}}</td>
                        <td>{{$odata->code}}</td>
                        <td>{{$odata->value}}</td>

                        <td>
                            <!-- <a href="{{route('manager.offer.edit',$odata->id)}}"><i style="margin-left: 30px;color:#FFA500;font-weight: bold; font-size: 30px;" class=" bi bi-pencil-square"></i></a> &nbsp;
                            <a href="{{route('manager.offer.delete',$odata->id)}}"><i class="bi bi-trash-fill" style="margin-left: 30px;color:red;font-weight: bold;font-size: 30px;"></i></a> -->

                            @if($odata->status==1)
                            <!-- <a href="{{url('manager/offer/status/0')}}">
                                <button type="button" class="btn btn-danger">DeActivate</button>
                                <i class="bi bi-hand-thumbs-up" style="margin-left: 30px;color:green;font-weight: bold;font-size: 30px;"></i>DeActivate
                            </a> -->
                            <!-- <a href="{{url('manager/offer/status/0',$odata->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-up" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i> -->

                                <!-- ACTIVATE -->


                            </a>

                            @elseif($odata->status==0)
                            <!-- <a href="{{url('manager/offer/status/1',$odata->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-down" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i> -->

                                <!-- DEACTIVATE -->


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