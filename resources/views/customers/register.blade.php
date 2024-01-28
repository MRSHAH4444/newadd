<!DOCTYPE html>

<head>
	<title>Visitors an admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
	<!-- bootstrap-css -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<!-- //bootstrap-css -->
	<!-- Custom CSS -->


	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
	<!-- font CSS -->
	<link href="{{asset('//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}" rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css" />
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome icons -->
	<script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
</head>

<body style="font-family: Georgia, serif; font-weight: bold;font-style: italic;">
	<div class="log-w3">
		<div class="w3layouts-main">
			<!-- <h2>Sign In Now</h2> -->
			<!--  -->
			<div style="font-size: 50px; font-weight:bolder;text-align:center;">
				{{Config::get('constants.site')}}
			</div>
			<!--  -->

                                    <form class="forms-sample" action="{{route('customers.register_code')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">First Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="first_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="last_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Email</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Password</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="password" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Address</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Contact NO</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="contact_no" required>
                                        </div>

                                        <div class="form-group">
                                            <!-- <label>image</label> -->
                                            <label for="image">{{__('Image')}}:</label>
                                            <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="profile_image" required>


                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">State</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="state">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">City</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="city">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">pincode</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="pincode">
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" /> -->
                                            <label class="form-check-label" for="form2Example3">
                                                Already have an account ??<a href="{{route('customers.login')}}">
                                                    <br> CLICK HERE FOR LOGIN</a>

                                            </label>

                                        </div>


                                        <button type="submit" class="btn btn-primary mr-2">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <p>Don't Have an Account ?<a href="{{asset('customers/registration')}}">Create an account</a></p>
		</div>
	</div>
	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>
	<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
</body>

</html>