@extends('admin.layout')
@section('container')


<div class="row">
    <!-- <h1>Dashboard</h1> -->
    <div class="col-6">
        <p class="card-title">VIEW PRODUCT</p>
    </div>
    <div class="col-6" style="justify-content: end;padding-bottom:5px; display: flex; align-items: flex-end;">
        <!-- <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('manager.product.create')}}" style="text-decoration: none ;font-weight: bold;color:white">ADD PRODUCT</a></button></p> -->
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="example" class=" center display expandable-table table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Description</th>
                        <th scope="col">Keywords</th> 
                        <th scope="col">ps_category_id</th>
                        <!-- <th scope="col">Option</th> -->

                    </tr>
                </thead>
                <tbody>
                    @foreach($pdata as $pdata)
                    <tr>

                        <td>{{$pdata->product_name}}</td>
                        <td><img src="{{url('product')}}/{{$pdata->image}}" style="width:100px;height:100px"></td>

                        <td>{{$pdata->brand}}</td>
                        <td>{{$pdata->short_description}}</td>
                        <td>{{$pdata->description}}</td>
                        <td>{{$pdata->keywords}}</td>
                        <td>{{$pdata->ps_category_id}}</td>
                        <!-- <td><img src="{{url('subcategory')}}/{{$pdata->photo}}" style="width:100px;height:100px"></td> -->

                        <!-- <td><a href="{{route('manager.product.edit',$pdata->id)}}"><i style="margin-left: 25px;color:#FFA500;font-weight: bold; font-size: 30px;" class=" bi bi-pencil-square"></i> &nbsp;
                                <a href="{{route('manager.product.delete',$pdata->id)}}"><i class="bi bi-trash-fill" style="color:red;font-weight: bold;font-size: 30px;"></i></a>  -->

                                @if($pdata->status==1)
                          
                            <!-- <a href="{{url('manager/product/status/0',$pdata->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-up" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i> -->

                                <!-- ACTIVATE -->


                            </a>

                            @elseif($pdata->status==0)
                            <!-- <a href="{{url('manager/product/status/1',$pdata->id)}}" style="color:blue;font-weight: bold;font-size: 20px;"><i class="bi bi-hand-thumbs-down" style="margin-left: 30px;color:blue;font-weight: bold;font-size: 30px;"></i> -->

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