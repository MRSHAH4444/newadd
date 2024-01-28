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
                        <p class="card-title" style="padding-left: 8px;"><b>EDIT PRODUCT</b></p>
                    </div>
                    <div class="col-6" style="justify-content: end; display: flex; align-items: flex-end;">
                        <p class="card-title"><button type="button" class="btn btn-success"><a href="{{route('Admin.product.index')}}" style="text-decoration: none ;font-weight: bold;color:white">VIEW PRODUCT</a></button></p>
                    </div>
                </div>

                <form class="forms-sample" action="{{route('Admin.product.update')}}" method="post" enctype="multipart/form-data">


                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}" />
                    <div class="form-group">
                        <label for="exampleInputName1">product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{$data->product_name}}" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <!-- <label>image</label> -->
                        <label for="image">{{__('Image')}}:</label>
                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="image" enctype="miltipart/form-data" multiple>


                    </div>

                    <!-- <div class="form-group">
                        <label for="exampleInputName1">product Brand</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{$data->brand}}" name="brand" required>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputName1">Short Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{$data->short_description}}" name="short_description" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">product Description</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{$data->product_discription}}" name="product_discription" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">product cost</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{$data->product_cost}}" name="product_cost" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">QOH</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="QOH" value="{{$data->QOH}}" required>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputName1">Category</label>

                        <select id="exampleInputName1" name="category_id" class="form-control" required>
                            <option>Category</option>
                            @foreach($category as $subcategory)
                            <option value="{{$category->id}}"> {{$category->category_name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputName1">Sub Category</label>

                        <select id="exampleInputName1" name="ps_category_id" class="form-control" required>
                            <option>Sub Category</option>
                            @foreach($subcategory as $subcategory)
                            <option value="{{$subcategory->id}}"> {{$subcategory->ps_category_name}}</option>
                            @endforeach

                        </select>
                    </div>

<!-- 
                    <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input type="text" class="form-control" value="{{$data->keyword}}" id="exampleInputName1" name="keywords" required>
                    </div> -->



                    <!-- <div class="form-group">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">lead_time</label>
                                    <input type="text" class="form-control" value="{{$data->lead_time}}" id="exampleInputName1" name="lead_time" required>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">tax</label>
                                    <input type="text" class="form-control" value="{{$data->tax}}" id="exampleInputName1" name="tax" required>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">tax_type</label>
                                    <input type="text" class="form-control" value="{{$data->tax_type}}" id="exampleInputName1" name="tax_type" required>
                                </div>
                            </div>
                        </div> -->


                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Is_promo</label>
                                        <select id="exampleInputName1" name="is_promo" class="form-control">

                                            @if($is_promo == '1')
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                            @elseif($is_promo == '0')
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                            @else
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>

                                            @endif

                                            <!-- <option>yes</option>
                                            <option>No</option> -->
                                        </select>



                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Is_featured</label>
                                        <!-- <input type="text" class="form-control" id="exampleInputName1" name="Is_featured" required> -->
                                        <select id="exampleInputName1" name="is_featured" class="form-control">

                                            @if($is_featured == '1')
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                            @elseif($is_featured == '0')
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                            @else
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>

                                            @endif

                                            <!-- <option>yes</option>
                                            <option>No</option> -->
                                        </select>


                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Is_discounted</label>
                                        <!-- <input type="text" class="form-control" id="exampleInputName1" name="Is_discounted" required> -->
                                        <select id="exampleInputName1" name="is_discounted" class="form-control">

                                            @if($is_discounted == '1')
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                            @elseif($is_discounted == '0')
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                            @else
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>

                                            @endif

                                            <!-- <option>yes</option>
                                            <option>No</option> -->
                                        </select>


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Is_tranding</label>
                                        <!-- <input type="text" class="/form-control" id="exampleInputName1" name="Is_tranding" required> -->
                                        <select id="exampleInputName1" name="is_tranding" class="form-control">

                                            @if($is_tranding == '1')
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                            @elseif($is_tranding == '0')
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                            @else
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>

                                            @endif

                                            <!-- <option>yes</option>
                                            <option>No</option> -->
                                        </select>



                                    </div>
                                </div>
                            </div>
                        </div>





                        <!-- product attribute -->


                        <h4><b>PRODUCT ATTRIBUTE</b></h4>
                        </br>
                        <div id="product_attr_box">
                            <div id="product_attr_1">
                                <div class="form-group">

                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputName1">Color</label>
                                            <select id="exampleInputName1" name="color_id[]" class="form-control">
                                                <option>Color</option>
                                                @foreach($color as $color)
                                                <option value="{{$color->id}}"> {{$color->color}}</option>
                                                @endforeach

                                            </select>
                                        </div>



                                        <div class="col-md-6">
                                            <label for="exampleInputName1">Size</label>
                                            <select id="exampleInputName1" name="size_id[]" class="form-control">
                                                <option>Size</option>
                                                @foreach($size as $size)
                                                <option value="{{$size->id}}"> {{$size->size}}</option>
                                                @endforeach

                                            </select>
                                        </div> 

                                    </div>-->


                                    <div class="form-group">
                                        <div class="row">
                                            <!-- <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="exampleInputName1">SKU</label>
                                                <input type="text" class="form-control" id="exampleInputName1" name="SKU[]" required>
                                            </div>
                                        </div>
 -->

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">MRP</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" name="MRP[]" required>
                                                </div>
                                            </div>



                                            <div class="col-md-4">


                                                <div class="form-group">
                                                    <label for="exampleInputName1">Price</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" name="price[]" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <label for="exampleInputName1">QTY</label>
                                                    <input type="text" class="form-control" id="exampleInputName1" name="qty[]" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>photo</label>

                                                    <!-- <input id="image" type="file" class="form-control" aria-required="true" aria-invalid="false" name="image[]" multiple enc>
                                                -->
                                                    <label for="photo">{{__('photo')}}:</label>
                                                    <input type="file" accept='photo/*' onchange="readURL(this,'#img1')" class="form-control" id="photo" name="photo[]" enctype="multipart/form-data" multiple>

                                                </div>

                                                <div class="col-md-4">
                                                    <div>
                                                        <label for="exampleInputName1">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                        <button type="submit" class="btn btn-primary mr-3" onclick="add_more()"><i class="fa fa-plus"></i>&nbsp;ADD</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">EDIT PRODUCT</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var loop_count = 1;

    function add_more() {
        //alert('s');
        loop_count++;
        var html = '<div id = "product_attr_' + loop_count + '"><div class = "form-group"> <div class = "row">';
        //  var color_id_html = jQuery(#color_id).html();
        html += '<div class="col-md-6"><label for = "exampleInputName1"> Color </label> <select id = "exampleInputName1" name = "color_id[]" class = "form-control"required ><option > Color </option> @foreach($col as $col) <option value = "{{$col->id}}"> { {$col -> color}} </option>@endforeach </select> </div>';

        html += '<div class="col-md-6"><label for = "exampleInputName1"> Size </label> <select id = "exampleInputName1" name = "size_id[]" class = "form-control"required ><option > Size </option> @foreach($si as $si) < option value = "{{$si->id}}" > {{$si -> size}} </option>@endforeach</select> </div>';

        // html += '<div class="col-md-3"><div class = "form-group"><label for = "exampleInputName1"> SKU </label> <input type = "text" class = "form-control" id = "exampleInputName1" name = "SKU[]"required/></div> </div > ';
        html += '<div class ="col-md-3"> <div class = "form-group"> <label for = "exampleInputName1"> MRP </label><input type = "text" class = "form-control" id = "exampleInputName1" name = "MRP[]"  required /> </div> </div >';
        html += '<div class="col-md-3"><div class = "form-group"><label for = "exampleInputName1" > Price </label> <input type = "text" class = "form-control" id = "exampleInputName1" name = "price[]" required ></div> </div>';
        html += '<div class="col-md-3"><div class = "form-group"><label for = "exampleInputName1" > QTY </label> <input type = "text" class = "form-control" id = "exampleInputName1" name = "qty[]" required ></div> </div>';
        // html += '<div class="col-md-3"><div class = "form-group"><label for = "exampleInputName1" > IMAGE </label> <input type = "file" class = "form-control" id = "exampleInputName1" name = "image[]" enctype="multipart/form-data></div> </div>';
        html += '<div class="col-md-5"><div class="form-group"><label for="photo">{{ __("photo")}}:</label><input type="file" accept="photo/*" onchange="readURL(this,\'#img1\')" class="form-control" id="photo" name="photo[]" enctype="multipart/form-data" multiple></div></div>';

        html += '<div class="col-md-3"><div class = "form-group"><button type = "submit" class = "btn btn-primary mr-3" onclick = remove_more("' + loop_count + '")> <i class = "fa fa-minus"></i>&nbsp;REMOVE</button></div></div>';
        html += '</div></div></div>';
        jQuery('#product_attr_box').append(html)

    }

    function remove_more(loop_count) {
        jQuery('#product_attr_' + loop_count).remove();

    }
</script>
@endsection