@extends('manager.layout')
@section('container')


<div class="row">
    <!-- <h1>Dashboard</h1> -->
    <div class="col-6">
        <p class="card-title">VIEW FEEDBACK</p>
    </div>
    <div class="col-6" style="justify-content: end;padding-bottom:5px; display: flex; align-items: flex-end;">
        
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="example" class=" center display expandable-table table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">MSg</th>
                        <th scope="col">Option</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($udata as $udata)
                    <tr>

                        <td>{{$udata->name}}</td>
                        <td>{{$udata->email}}</td>
                        <td>{{$udata->msg}}</td>
                        
                        <td><a href="{{route('manager.index_feedback_delete',$udata->id)}}"><i class="bi bi-trash-fill" style="color:red;font-weight: bold;font-size: 30px;"></i></a> </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





@endsection