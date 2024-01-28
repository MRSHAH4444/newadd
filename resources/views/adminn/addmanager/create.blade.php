@extends('admin.layout')
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
                        <p class="card-title" style="padding-left: 8px;">ADD MANAGER</p>
                    </div>
                    <div class="col-6" style="justify-content: end; display: flex; align-items: flex-end;">
                        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('admin.addmanager.index')}}" style="text-decoration: none ;font-weight: bold;color:white">VIEW MANAGER</a></button></p>
                    </div>
                </div>

                <form class="forms-sample" action="{{route('admin.addmanager.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">firstname</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="firstname">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputName1">lastname</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="lastname">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">email</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">password</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">contactno</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="Contactno">
                    </div>
                    



                    <button type="submit" class="btn btn-primary mr-2">ADD MANAGER</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection